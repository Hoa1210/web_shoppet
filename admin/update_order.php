<?php
include ("controllers/c_order.php");
$c_update = new c_order();
$c_update->update_status();
?>