<?php

if (!isset($_SESSION['login'])) {

    echo "<script> alert('Bạn chưa đăng nhập!!')</script>";
    echo "<script>location.href = 'user.php';</script>";
}
?>