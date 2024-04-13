<?php
@session_start();
include ("check_login.php");
include ("controllers/c_order_history.php");

$details = new c_order_history();
$details->order_details();
?>