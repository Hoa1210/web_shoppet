<?php
include("controllers/c_order_history.php");

$order_history = new c_order_history();
$order_history->order_history();
?>