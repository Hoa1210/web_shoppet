<?php
include ("models/m_checkout.php");
@session_start();
class c_order_history {
    public function order_history() {

        $ma_kh = $_SESSION['login']->id;

        $m_checkout = new m_checkout();

        $history = $m_checkout->select_order_history($ma_kh);

        $view = "views/order_history/v_order_history.php";
        include ("templates/layout.php");
    }

    public function order_details() {

        if(isset($_GET['ma_dh'])) {
            $ma_dh = $_GET['ma_dh'];

            $m_checkout = new m_checkout();
            $details = $m_checkout->select_order_details($ma_dh);

            $view = "views/order_history/v_order_details.php";
            include("templates/layout.php");
        }
    }
}
?>