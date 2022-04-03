<?php
include("controllers/c_shop.php");

$c_shop = new c_shop();
$shop = $c_shop->shop();
$quick_view = $c_shop->quick_view();
?>
