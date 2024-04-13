<?php

include ("controllers/c_user.php");
$user = new c_user();

$register = $user->register();

$login = $user->login();


if(isset($_SESSION['login'])){
    $logout = $user->profile();
    $logout = $user->information_user();

} else {
    $account = $user->account();
}

?>