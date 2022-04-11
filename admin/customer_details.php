<?php
include("controllers/c_customer.php");
include ("check_login.php");
$m_customer = new c_customer();
$abc =$m_customer->list_customer();
?>