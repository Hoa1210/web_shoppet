<?php
include ("check_login.php");
include('controllers/c_home.php');
$home = new c_home();
$home->c_home();
?>