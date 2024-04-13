<?php
@session_start();
include ("check_login.php");
include_once ("controllers/c_checkout.php");
$c_checkout = new c_checkout();
$show = $c_checkout->checkout();
$order = $c_checkout->add_order();
?>