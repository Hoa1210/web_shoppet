<?php
include_once ("controllers/c_checkout.php");
$c_checkout = new c_checkout();
$show = $c_checkout->c_checkout();
$order = $c_checkout->add_order();
?>