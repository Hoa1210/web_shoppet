<?php
include("controllers/c_product.php");
include ("check_login.php");
$product = new c_product();
$product->product();
?>