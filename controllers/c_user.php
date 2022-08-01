<?php 
class c_user extends Controller{

    public function index() {
        $this->loadView('auth/login');
    }

    public function register() {
    
        if(isset($_POST["submit"])){
            $id = null;
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $m_user = $this->loadModel('user');
            $result = $m_user->register($id, $username, $email, md5($password));

            if($result){
                $this->loadView('auth/login',[
                    'content' => "Bạn đã đăng ký tài khoản thành công!",
                    'status' => 'success',
                ]);
            }
        }
        $this->loadView('auth/register');
    }

    public function login() {
        $_SESSION['check'] = "Đăng nhập thành công";
        if(isset($_POST["submit"])){
            $email = $_POST["email"];
            $password = $_POST["password"];

            $m_user = $this->loadModel('user');
            // $result = $m_user->check_account($email, md5($password));
            $result = $m_user->check_account($email,md5($password));
            
            if($result){
                $_SESSION['login'] = "Đăng nhập thành công";
                header("Location:index.php?controller=home&method=index");
            }else{
                $this->loadView('auth/login',[
                    'content' => "Sai tài khoản hoặc mật khẩu!",
                    'status' => 'danger',
                ]);
            }


        }
         $this->loadView('auth/login');
    }

}
?>