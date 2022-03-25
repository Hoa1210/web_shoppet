<?php
include ("controllers/c_cart.php");
include ("check_login.php");
$cart = new c_cart();
$cart->cart();
?>