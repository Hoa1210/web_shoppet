<?php

include ("models/m_product.php");

class c_product{

    public function addproduct(){

        if(isset($_POST['btn-submit'])) {
            $ma_sp = $_POST['ma_sp'];
            $ten_sp = $_POST['ten_sp'];

            //lấy hình ảnh
            $hinh_sp = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] : "";

            $so_luong = $_POST['so_luong'];
            $gia_ban = $_POST['gia_ban'];
            $thong_tin_them = $_POST['thong_tin'];
            $trang_thai = $_POST['trang_thai'];
//         echo print_r($_FILES['f_hinh_anh']);
//         die();


            $m_banner = new m_product();
            $result = $m_banner->insert_product($ma_sp,$ten_sp,$hinh_sp,$so_luong,$gia_ban,$thong_tin_them,$trang_thai);
            if ($result) {
                if ($hinh_sp != "") {
                    //di chuyển hình vào thư mục source
                    move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "public/imageproduct/".$hinh_sp);
                }
                echo "<script>alert('Success!')</script>";
            } else {
                echo "<script>alert('No thanh cong');</script>";
            }
        }
        $view = "views/product/v_add_product.php";
        include ("templates/layout.php");
    }

    public function product() {


        $banner = new m_product();
        $product = $banner->select_product();

        $view = "views/product/v_product.php";
        include ("templates/layout.php");
    }


    public function editproduct() {


        if(isset($_GET['ma_sp'])) {
            $ma_sp = $_GET['ma_sp'];
            $m_product = new m_product();
            $edit_product = $m_product->select_product_by_id_product($ma_sp);

            if(isset($_POST['btn-submit'])) {
                $ten_sp     = $_POST['ten_sp'] ;
                $hinh_sp= $_FILES['f_hinh_anh']['error'] == 0 ? $_FILES['f_hinh_anh']['name'] : $edit_product->hinh_anh;
                $so_luong   = $_POST['so_luong'] ;
                $gia_ban    = $_POST['gia_ban'] ;
                $thong_tin_them = $_POST['thong_tin'] ;
                $trang_thai = $_POST['trang_thai'] ;

                $m_product = new m_product();

                $result = $m_product->edit_product($ma_sp,$ten_sp,$hinh_sp,$so_luong,$gia_ban,$thong_tin_them,$trang_thai);

                if ($result) {
                    if ($_FILES['f_hinh_anh']['error'] == 0) {
                        //di chuyển hình vào thư mục source
                        move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "public/imageproduct/".$hinh_sp);
                    }
                    echo "<script>window.location='list_product.php'</script>";
                } else {
                    echo "<script>alert('No thanh cong');</script>";
                }
            }

        }

        $view = "views/product/v_edit_product.php";
        include ("templates/layout.php");

    }

    public function deleteproduct() {
        if(isset($_GET['ma_sp'])) {
            $ma_sp = $_GET['ma_sp'];

            $m_product = new m_product();
            $delete = $m_product->delete_product($ma_sp);
            if($delete)
            {
                echo "<script>alert('Xóa thành công');window.location.href='list_product.php'</script>";
            }
        }
    }

}
?>