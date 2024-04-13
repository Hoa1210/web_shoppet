<?php
include_once("models/m_user.php");
@session_start();
class c_user {

    public function account() {
        $view = "views/user/v_user.php";
        include ("templates/layout.php");
    }

    public function profile() {

        $id_user = $_SESSION['login']->id;
        $email_user = $_SESSION['login']->email;
        $info = new m_user();
        $profile = $info->read_information_user($id_user);
        // var_dump($profile);
        // die;
        if(!$profile) {
            $info->add_information_user($id_user, $email_user);
            // header("Location:user.php");
        }
        
        $view = "views/profile/v_profile.php";
        include ("templates/layout.php");

    }

    public function information_user() {
        if(isset($_POST['btn_information'])) {
            $id = $_SESSION['login']->id;
            $ten_khach_hang = $_POST['name'];
            $ngay_sinh = $_POST['date'];
            $dia_chi = $_POST['address'];
            $gioi_tinh = $_POST['gender'];
            $so_dien_thoai = $_POST['phone'];
            $email = $_POST['email'];

            $information = new m_user();
            $result1 = $information->edit_information_user( $id, $ten_khach_hang, $ngay_sinh, $dia_chi, $so_dien_thoai, $email, $gioi_tinh);
            if($result1) {
                echo "<script>window.location='user.php'</script>";
            }else{
                echo "<script>alert('Thêm thất bại');</script>";
            }

        }
    }

    public function register() {
        if(isset($_POST["btn_submit"])) {

            $id = NULL;
            $ten_dang_nhap = $_POST["ten_dang_nhap"];
            $email = $_POST["email"];
            $mat_khau = $_POST["mat_khau"];
            $trang_thai = 0;
            $m_user = new m_user();
            $check_username = $m_user->check_username($ten_dang_nhap);
            $check_email = $m_user->check_email($email);

            if(!empty($check_username)) {
                $_SESSION['error_danger'] = "Tài khoản  đã tồn tại!!";
            }else {
                if(!empty($check_email)) {
                    $_SESSION['error_danger'] = "Email đã tồn tại!!";
                }else {

                    $this->saveRegisterSession($id, $ten_dang_nhap, $email, $mat_khau, $trang_thai);

                    if (isset($_SESSION['register'])) {
                        $_SESSION['error_success'] = "Thành công rồi nhé!";
                    } else {
                        $_SESSION['error_danger'] = "Đăng ký thất bại!";
                    }
                }
            }
        }
    }

    public function saveRegisterSession($id,$ten_dang_nhap,$email,$mat_khau,$trang_thai) {
        $m_register = new m_user();
        $result = $m_register->insert_register($id,$ten_dang_nhap, $email, $mat_khau,$trang_thai);

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
                if(isset($_POST['remember'])){
                    setcookie("username",$ten_dang_nhap,time()+86400*7);
                    setcookie("password",$mat_khau,time()+86400*7);
                }else{
                    setcookie("username", "", time()-86400*7);
                    setcookie("password", "", time()-86400*7);
                }
                echo "<script>location.href = 'index.php?index';</script>";
            }
        }
    }

    public function saveLoginSession($ten_dang_nhap,$mat_khau) {
        $m_user = new m_user();
        $user = $m_user->read_user_by_id_pass($ten_dang_nhap, $mat_khau);
        if (!empty($user)) {
            if($user->trang_thai == 0) {
                $_SESSION['login'] = $user;
            }elseif ($user->trang_thai == 1) {
                unset($_SESSION['login']);
                $_SESSION['alert_login'] = "Tài khoản của bạn đã bị khóa!";
            }
        }else{
            $_SESSION['alert_login'] = "Sai tài khoản hoặc mật khẩu!";
        }
    }

    public function logout(){
        unset($_SESSION['login']);
        echo "<script>location.href = 'user.php';</script>";
    }
}
?>