<?php
@session_start();
include ("controllers/c_cart.php");
include ("check_login.php");
$cart = new c_cart();
$cn =$cart->cart();
$del = $cart->delete_product();
$del_cart = $cart->delete_cart();
$view = $cart->view_cart();
?>