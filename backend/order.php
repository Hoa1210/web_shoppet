<?php
include ("check_login.php");
include_once "controllers/c_order.php";
$order = new c_order();
$order->order();
?>