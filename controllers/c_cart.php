<?php
session_start();
include ("models/m_cart.php");
class c_cart
{

    public function cart()
    {


        // tạo SESSION gio hang
        if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

        // lấy dư liệu
        if (isset($_GET['ma_sp'])) {

            $ma_sp = $_GET['ma_sp'];

            $cart = new m_cart();
            $add_cart = $cart->select_product_by_id_product($ma_sp);

            $ten_sp = $add_cart->ten_sp;
            $hinh_sp = $add_cart->hinh_anh;
            $gia_ban = $add_cart->gia_ban;

            $so_luong = 1;
            // lấy số lượng sp từ trang product_detail
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case "add":
                        $so_luong = $_POST['so_luong'];
                        break;
                }
            }

            if(isset($_POST['btn_delete'])) unset($_SESSION['cart']);

            // them moi sp
            $sp = [$ma_sp, $ten_sp, $hinh_sp, $gia_ban, $so_luong];
            $_SESSION['cart'][] = $sp;
        }

        $view = "views/cart/v_cart.php";
        include("templates/layout.php");
    }
}

?>