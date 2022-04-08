<?php
@session_start();
include ("check_login.php");
include "controllers/c_user.php";

$edit = new c_user();
$a = $edit->edit_information();
$b = $edit->edit_information_user();
?>