<?php
include_once("models/m_user.php");
session_start();
class c_user {

    public function account() {
        $view = "views/user/v_user.php";
        include ("templates/layout.php");
    }

    public function profile() {

        $info = new m_user();
        $profile = $info->info_user();

        $view = "views/profile/v_profile.php";
        include ("templates/layout.php");

    }

    public function register() {

        if(isset($_POST["btn_submit"])) {
            $ten_dang_nhap = $_POST["ten_dang_nhap"];
            $email = $_POST["email"];
            $mat_khau = $_POST["mat_khau"];

            $this->saveRegisterSession($ten_dang_nhap, $email, $mat_khau);

            if (isset($_SESSION['register'])) {
//                $_SESSION['error_success'] = "Thành công rồi nhé!";
                echo "<script> alert('Đăng ký thành công!!'); </script>";
            }else {
//                $_SESSION['error_danger'] = "Đăng ký thất bại!";
                echo "<script> alert('Đăng ký thất bại!!'); </script>";
            }

        }
    }

    public function saveRegisterSession($ten_dang_nhap,$email,$mat_khau) {
        $m_register = new m_user();
        $result = $m_register->insert_register($ten_dang_nhap, $email, $mat_khau);
        if (!empty($result)) {
            $_SESSION['register'] = $result;
        }
    }

    public function login() {


        if(isset($_POST['login'])) {
            $ten_dang_nhap = $_POST['ten_dang_nhap'];
            $mat_khau = $_POST['mat_khau'];


            $this->saveLoginSession($ten_dang_nhap, $mat_khau);

//            echo print_r($_SESSION['login']);


            if (isset($_SESSION['login'])) {
                echo "<script> alert('Đăng nhập thành công!'); </script>";
                echo "<script>location.href = 'home.php';</script>";
//
            }else {
                echo "<script> alert('Đăng nhập thất bại!!'); </script>";
            }
        }
    }

    public function logout(){
        unset($_SESSION['login']);
        echo "<script>location.href = 'user.php';</script>";
    }

    public function saveLoginSession($ten_dang_nhap,$mat_khau) {
        $m_user = new m_user();
        $user = $m_user->read_user_by_id_pass($ten_dang_nhap, $mat_khau);
        if (!empty($user)) {
            $_SESSION['login'] = $user;
        }
    }


}
?>