<?php
@session_start();
include ("controllers/c_user.php");
if($_GET['func']){
    $c_user = new c_user();
    $c_user->logout();
}

?>