<?php
@session_start();
include ("check_login.php");
include "controllers/c_user.php";
$add = new c_user();
$add->add_profile();
?>