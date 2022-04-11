<?php
include ("check_login.php");
include ("controllers/c_order.php");
$c_order = new c_order();
$c_order->order_details();
?>