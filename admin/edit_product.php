<?php
include ("check_login.php");
include('controllers/c_product.php');
$banner = new c_product();
$banner->editproduct();
?>