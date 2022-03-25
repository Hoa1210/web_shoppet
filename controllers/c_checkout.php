<?php
session_start();
class c_checkout {
    public function c_checkout() {
        $view = "views/checkout/v_checkout.php";
        include ("templates/layout.php");
    }
}
?>