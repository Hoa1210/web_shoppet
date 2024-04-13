<?php
include ("controllers/c_product.php");
$delete = new c_product();
$delete->delete_product_categories();
?>