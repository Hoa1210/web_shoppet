<?php
@session_start();
if (!isset($_SESSION['login_admin'])) {
    $_SESSION['alert_login'] = "Bạn chưa đăng nhập!";
    echo "<script>location.href = 'login.php';</script>";
}
?>