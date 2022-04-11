<?php
include ("check_login.php");
include ("controllers/c_product.php");
$type = new c_product();
$type->add_product_type();
?>