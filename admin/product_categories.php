<?php
include ("check_login.php");
include "controllers/c_product.php";
$show = new c_product();
$show->show_product_categories();
?>