<?php
@session_start();
include_once ("models/m_user.php");
class c_user {

    public function login() {
        if (isset($_POST['login'])) {

                $username = $_POST["username"];
                $password = $_POST["password"];

            $this->saveLoginSession($username,$password);

            if (isset($_SESSION['login_admin'])) {
                echo "<script>window.location.href = 'list_product.php';</script>";
            }else{
                $_SESSION['alert_login'] = "Sai thông tin";
                echo "<script>window.location.href = 'login.php';</script>";
            }
        }
    }

    public function logout(){
        unset($_SESSION['login_admin']);
        echo "<script>window.location.href = 'login.php';</script>";
    }

    public function saveLoginSession($username,$password) {
        $m_user = new m_user();
        $user = $m_user->read_user_by_id_pass($username, $password);
        if (!empty($user)) {
            $_SESSION['login_admin'] = $user;
        }
    }


}
?>