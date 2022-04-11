<?php
include ("check_login.php");
include "controllers/c_customer.php";
$c_customer = new c_customer();
$c_customer->list_account();
?>