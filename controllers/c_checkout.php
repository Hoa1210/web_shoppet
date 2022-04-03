<?php
include "models/m_checkout.php";
@session_start();
class c_checkout {

    public function c_checkout() {
        $ma_kh = $_SESSION['id_user'];
        $m_checkout = new m_checkout();
        $check_out = $m_checkout->select_infomation_user($ma_kh);


        $view = "views/checkout/v_checkout.php";
        include_once ("templates/layout.php");
    }

    public function add_order() {
        if(isset($_POST['btn_order'])) {

            $ma_hd = NULL;
            $ma_kh = $_SESSION['id_user'];
            $tong_tien = $_SESSION['tong'];
            $phuong_thuc_thanh_toan = $_POST['radio-group'];
            $ngay_thanh_toan = date("Y-m-d");
            $trang_thai = 1;

            echo $ma_hd;
            echo $ma_kh;
            echo $tong_tien;
            echo $phuong_thuc_thanh_toan;
            echo $ngay_thanh_toan;
            $m_order = new m_checkout();
            $order = $m_order->insert_order($ma_hd, $ma_kh, $tong_tien, $phuong_thuc_thanh_toan,$ngay_thanh_toan,$trang_thai);

            echo "<pre />";
            var_dump($order);
        }
    }
}
?>