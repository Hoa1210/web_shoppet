<?php
@session_start();
if (!isset($_SESSION['login'])) {
    $_SESSION['alert_login'] = "Bạn chưa đăng nhập!";
    echo "<script>location.href = 'user.php';</script>";
}
?>