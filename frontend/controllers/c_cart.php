<?php

include ("models/m_cart.php");
@session_start();
class c_cart
{
    public function cart()
    {
        // tạo SESSION gio hang
        if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

        // lấy dư liệu
            if (isset($_GET['ma_sp'])) {

                $ma_sp = $_GET['ma_sp'];

                // lấy thông tin sp từ database
                $cart = new m_cart();
                $add_cart = $cart->select_product_by_id_product($ma_sp);

                if($add_cart->so_luong != 0) {
                    $ten_sp = $add_cart->ten_sp;
                    $hinh_sp = $add_cart->hinh_anh;
                    $gia_ban = $add_cart->gia_ban;
                    $so_luong = 1;
                    $sl_max = $add_cart->so_luong;
                    // lấy số lượng sp từ trang product_detail
                    if (isset($_GET['action'])) {
                        if ($_GET['action'] == 'add2') {
                            $so_luong = $_POST['so_luong'];
                        }
                    }

                    // gán thông tin sp vào mảng 2 chiều
                    $_SESSION['cart'][$ma_sp] = [
                        'id' => $ma_sp,
                        'ten_sp' => $ten_sp,
                        'hinh_sp' => $hinh_sp,
                        'gia_ban' => $gia_ban,
                        'so_luong' => $so_luong,
                        'sl_max' => $sl_max,
                    ];

                    // tính tổng tiền của từng sp
                    //  $_SESSION['cart'][$ma_sp]['tt'] = $_SESSION['cart'][$ma_sp]['so_luong'] * $_SESSION['cart'][$ma_sp]['gia_ban'];

                    header("location:cart.php");
                }else{
                    echo "<script>alert('Sản phẩm đã hết hàng');window.location.href='shop.php';</script>";
                }
            }
            if(isset($_POST['btn_update'])) {
                foreach ($_POST['so_luong'] as $key => $value) :
                    if($value == 0) {
                        unset($_SESSION['cart'][$key]);
                    }else{
                        if($value > $_SESSION['cart'][$key]['sl_max']){
                            $_SESSION['cart'][$key]['so_luong'] = $_SESSION['cart'][$key]['sl_max'];
                        }else {
                            $_SESSION['cart'][$key]['so_luong'] = $value;
                        }
                    }
                endforeach;
            }
    }

    // xóa toàn bộ giỏ hàng
    public function delete_cart() {
        if(isset($_POST['btn_delete'])) {
            unset($_SESSION['cart']);
            header("location:cart.php");
        }
    }

    // xóa sản phẩm muốn xóa
    public function  delete_product() {
        $key = isset($_GET['key']) ? $_GET['key'] : "";
        if($key) {
            if(array_key_exists($key,$_SESSION['cart'])) {
                unset($_SESSION['cart'][$key]);
            }
            header("location:cart.php");
        }
    }

    // hiển thị giỏ hàng
    public function view_cart() {
        $view = "views/cart/v_cart.php";
        include("templates/layout.php");
    }
}

?>