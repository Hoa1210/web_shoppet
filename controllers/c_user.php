<?php
include_once("models/m_user.php");
@session_start();
class c_user {

    public function account() {
        $view = "views/user/v_user.php";
        include ("templates/layout.php");
    }

    public function profile() {

        $id_user = $_SESSION['id_user'];
        $info = new m_user();
        $profile = $info->read_information_user($id_user);

        $view = "views/profile/v_show_profile.php";
        include ("templates/layout.php");

    }

    public function edit_information() {
        $id_user = $_SESSION['id_user'];
        $info = new m_user();
        $profile = $info->read_information_user($id_user);

        $view = "views/profile/v_edit_profile.php";
        include ("templates/layout.php");
    }

    public function edit_information_user() {
        if(isset($_POST['btn_information'])) {
            $id = $_SESSION['id_user'];
            $ten_khach_hang = $_POST['name'];
            $ngay_sinh = $_POST['date'];
            $dia_chi = $_POST['address'];
            $so_dien_thoai = $_POST['phone'];
            $email = $_POST['email'];

            $information = new m_user();
            $result1 = $information->edit_information_user( $ten_khach_hang, $ngay_sinh, $dia_chi, $so_dien_thoai, $email, $id);

            if($result1) {
                echo "<script>window.location='user.php'</script>";
            }

        }
    }

    public function register() {

        if(isset($_POST["btn_submit"])) {
            $id = NULL;
            $ten_dang_nhap = $_POST["ten_dang_nhap"];
            $email = $_POST["email"];
            $mat_khau = $_POST["mat_khau"];


            $this->saveRegisterSession($id,$ten_dang_nhap, $email, $mat_khau);

            if (isset($_SESSION['register'])) {
                $_SESSION['error_success'] = "Thành công rồi nhé!";
            }else {
                $_SESSION['error_danger'] = "Đăng ký thất bại!";
            }

        }
    }

    public function saveRegisterSession($id,$ten_dang_nhap,$email,$mat_khau) {
        $m_register = new m_user();
        $result = $m_register->insert_register($id,$ten_dang_nhap, $email, $mat_khau);

        if (!empty($result)) {
            $_SESSION['register'] = $result;
        }
    }

    public function login() {

        if(isset($_POST['login'])) {
            $ten_dang_nhap = $_POST['ten_dang_nhap'];
            $mat_khau = $_POST['mat_khau'];


            $this->saveLoginSession($ten_dang_nhap, $mat_khau);

            if (isset($_SESSION['login'])) {
                echo "<script>location.href = 'home.php';</script>";
            }else {
                echo "<script> alert('Đăng nhập thất bại!!'); </script>";
            }
        }
    }

    public function saveLoginSession($ten_dang_nhap,$mat_khau) {
        $m_user = new m_user();
        $user = $m_user->read_user_by_id_pass($ten_dang_nhap, $mat_khau);

        if (!empty($user)) {
            $_SESSION['login'] = $user;
            $_SESSION['id_user'] = $user->id;
        }
    }

    public function logout(){
        unset($_SESSION['login']);
        echo "<script>location.href = 'user.php';</script>";
    }
}
?>