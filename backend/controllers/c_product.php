<?php

include ("models/m_product.php");
@session_start();
class c_product{



    public function addproduct(){

        $loai_sp = new m_product();
        $arr = $loai_sp->select_product_categories();


        if(isset($_POST['btn-submit'])) {
            $ma_sp = $_POST['ma_sp'];
            $m_banner = new m_product();

            $ma = $m_banner->select_product_by_id_product($ma_sp);

            if($ma) {
                $_SESSION['alert_err_add_sp'] = "Đã tồn tại ".$ma_sp;
            }else {
                $ma_loai_sp = $_POST['ma_loai_sp'];

                $ten_sp = $_POST['ten_sp'];

                //lấy hình ảnh
                $hinh_sp = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] : "";

                $hinh_ctsp = ($_FILES['f_hinh_anhs']) ? $_FILES['f_hinh_anhs']['name'] : "";

                $so_luong = $_POST['so_luong'];
                $gia_ban = $_POST['gia_ban'];
                $thong_tin_them = $_POST['thong_tin'];
                $trang_thai = $_POST['trang_thai'];

                $result = $m_banner->insert_product($ma_sp, $ma_loai_sp, $ten_sp, $hinh_sp, $so_luong, $gia_ban, $thong_tin_them, $trang_thai);

                if ($result) {
                    if ($hinh_sp != "") {

                        // kiểm tra xem đã có forder imageproduct chưa
                        $filename = "public/imageproduct";

                        if(!file_exists( $filename )):
                            //nếu chưa thì tạo forder mới
                            mkdir( $filename ,  0777 ,  TRUE  );
                            move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "public/imageproduct/" . $hinh_sp);

                        else:
                            //di chuyển hình vào thư mục source
                            move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "public/imageproduct/" . $hinh_sp);
                        endif;
                    }

                    foreach($hinh_ctsp as $key=>$value) {
                        $id_anh = NULL;
                        $result2 = $m_banner->insert_img_product($id_anh, $ma_sp, $hinh_ctsp[$key]);

                        if ($result2) {
                            //di chuyển hình vào thư mục source
                            move_uploaded_file($_FILES['f_hinh_anhs']['tmp_name'][$key], "public/imageproduct/" . $hinh_ctsp[$key]);

                        }
                    }

                    $_SESSION['alert_add_sp'] = "Thêm sản phẩm có mã là " . $ma_sp . " thành công!!";
                }
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
            $img_product_details = $m_product->select_img_product_by_id_product($ma_sp);
            $loai_sp = new m_product();
            $arr = $loai_sp->select_product_categories();
            if(isset($_POST['btn-submit'])) {
                $ma_loai_sp = $_POST['ma_loai_sp'];
                $ten_sp     = $_POST['ten_sp'] ;
                $hinh_sp= $_FILES['f_hinh_anh']['error'] == 0 ? $_FILES['f_hinh_anh']['name'] : $edit_product->hinh_anh;
                $hinh_ctsp = ($_FILES['f_hinh_anhs']) ? $_FILES['f_hinh_anhs']['name'] : "";
                $so_luong   = $_POST['so_luong'] ;
                $gia_ban    = $_POST['gia_ban'] ;
                $thong_tin_them = $_POST['thong_tin'] ;
                $trang_thai = $_POST['trang_thai'] ;

                $m_product = new m_product();
                $result = $m_product->edit_product($ma_sp,$ma_loai_sp,$ten_sp,$hinh_sp,$so_luong,$gia_ban,$thong_tin_them,$trang_thai);

                if ($result) {
                    if ($_FILES['f_hinh_anh']['error'] == 0) {
                        // kiểm tra xem đã có ảnh đấy trong file chưa
                        if(file_exists( $_FILES['f_hinh_anh']['name'] )){
                            // nếu có thì xóa ảnh rồi thêm ảnh vào
                            unlink("public/imageproduct/".$_FILES['f_hinh_anh']['name']);
                            move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "public/imageproduct/".$hinh_sp);
                        }else{
                            //di chuyển hình vào thư mục source
                            move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "public/imageproduct/".$hinh_sp);
                        }

                    }

                    if($hinh_ctsp) {
                        foreach($hinh_ctsp as $key=>$value) {
            
                            $result2 = $m_product->edit_img_product( $ma_sp, $hinh_ctsp[$key]);
                            $id_image = $m_product->select_img_product_by_id_product($ma_sp);
                            if ($result2) {
                                //di chuyển hình vào thư mục source
                                if(file_exists($_FILES['f_hinh_anh']['name'])){
                                    
                                }else{
                                    move_uploaded_file($_FILES['f_hinh_anhs']['tmp_name'][$key], "public/imageproduct/" . $hinh_ctsp[$key]); 
                                }

                            }
                        }
                    }

                    $_SESSION['alert_product'] = "Sửa sản phẩm có mã là ".$ma_sp." thành công!!";
                    header("location:list_product.php");
                } else {
                    $_SESSION['alert_err_product'] = "Sửa sản phẩm có mã là ".$ma_sp." thất bại";
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
            $product = $m_product->select_product_by_id_product($ma_sp);
            $img_product = $m_product->select_img_product_by_id_product($ma_sp);
            $delete = $m_product->delete_product($ma_sp);
            $delete_image = $m_product->delete_image_product($ma_sp);
            if($delete)
            {
                unlink("public/imageproduct/".$product->hinh_anh);
                foreach($img_product as $value):
                unlink("public/imageproduct/".$value->hinh_anh);
                echo '123';
                endforeach;
                $_SESSION['alert_product'] = "Xóa sản phẩm có mã là ".$ma_sp." thành công!!";
            }else{
                $_SESSION['alert_err_product'] = "Xóa sản phẩm có mã là ".$ma_sp." thành công!!";
            }
            header("location:list_product.php");
        }
    }




    // LOẠI SẢN PHẨM
    public function add_product_categories() {

        if(isset($_POST['btn-submit'])) {
            $ma_loai = $_POST['ma_loai'];
            $ten_loai_sp = $_POST['ten_loai_sp'];

            $m_type = new m_product();
            $product_categories = $m_type->add_product_categories($ma_loai, $ten_loai_sp);


            if($product_categories) {
                $_SESSION['alert_add_loai_sp'] = "Thêm danh mục sản phẩm có mã là " . $ma_loai . " thành công!!";
            }else{
                $_SESSION['alert_add_loai_sp'] = "Thêm loại sản phẩm có mã là " . $ma_loai . " thất bại!!";
            }
        }

            $view = "views/categories/v_add_product_categories.php";
            include("templates/layout.php");
    }

    public function show_product_categories() {

        $show = new m_product();
        $show_type = $show->select_product_categories();

        $view = "views/categories/v_product_categories.php";
        include("templates/layout.php");
    }

    public function delete_product_categories() {
        if(isset($_GET['ma_loai'])) {
            $ma_loai = $_GET['ma_loai'];

            $m_product = new m_product();
            $delete = $m_product->delete_product_categories($ma_loai);
            if($delete)
            {
                $_SESSION['alert_type_product'] = "Xóa sản phẩm có mã là ".$ma_loai." thành công!!";
            }else{
                $_SESSION['alert_err_type_product'] = "Xóa sản phẩm có mã là ".$ma_loai." thành công!!";
            }
            header("location:type_product.php");
        }
    }

    public function edit_product_categories() {

        if(isset($_GET['ma_loai'])) {
            $ma_loai = $_GET['ma_loai'];
            $m_product = new m_product();
            $edit_typeproduct = $m_product->select_product_categories_by_id($ma_loai);

            if(isset($_POST['btn-submit'])) {
                $ten_loai_sp = $_POST['ten_loai_sp'];

                $insert = new m_product();
                $update = $insert->edit_product_categories($ma_loai, $ten_loai_sp);

                if($update)
                {
                    $_SESSION['alert_type_product'] = "Sửa loại sản phẩm có mã là ".$ma_loai." thành công!!";
                    header("location:product_categories.php");
                }else{
                    $_SESSION['alert_err_type_product'] = "Sửa loại sản phẩm có mã là ".$ma_loai." thành công!!";
                }

            }else{
                echo "no";
            }
        }
        $view = "views/categories/v_edit_product_categories.php";
        include("templates/layout.php");
    }
}
?>