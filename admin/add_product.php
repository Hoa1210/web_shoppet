<?php
//@session_start();
//if(isset($_SESSION['user'])) {
//    include("controllers/c_product.php");
//    $c_product = new c_product();
//    $c_product->addbanner();
//}else{
//    header("location:login.php");
//}
include("controllers/c_product.php");
$c_banner = new c_product();
$c_banner->addproduct();
?>