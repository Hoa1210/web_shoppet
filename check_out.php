<?php
@session_start();
include ("controllers/c_checkout.php");
$c_checkout = new c_checkout();
$c_checkout->c_checkout();
?>