<?php
include ("check_login.php");
include "controllers/c_product.php";
$edit = new c_product();
$edit->edit_type_product();
?>