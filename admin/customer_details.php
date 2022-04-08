<?php
include("controllers/c_customer.php");

$m_customer = new c_customer();
$abc =$m_customer->list_customer();
?>