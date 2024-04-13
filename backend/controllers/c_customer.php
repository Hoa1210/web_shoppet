<?php
include_once ("../backend/models/m_customer.php");
@session_start();
class c_customer {

    public function list_account() {

        $m_customer = new m_customer();
        $list_account = $m_customer->select_account();

        $view = "views/customer/v_account.php";
        include "templates/layout.php";
    }

    public function list_customer(){
            $ma_kh = $_GET['ma_kh'];
            $m_customer = new m_customer();
            $list_account = $m_customer->select_information($ma_kh);
            $view = "views/customer/v_customer.php";
            include "templates/layout.php";
    }
    public function delete_customer() {
        if(isset($_GET['ma_kh'])) {
            $ma_kh = $_GET['ma_kh'];
            if($_GET['trang_thai'] == 0){
                $trang_thai = 1;
            }elseif ($_GET['trang_thai'] == 1){
            $trang_thai = 0;
            }
            $m_customer = new m_customer();
            $delete = $m_customer->unlock_account($ma_kh,$trang_thai);
            if($delete) {
                    if($trang_thai == 0){
                        $_SESSION['alert_open_account'] = "Đã mở khóa tài khoản ".$ma_kh." !";
                    }elseif ($trang_thai == 1){
                        $_SESSION['alert_lock_account'] = "Đã khóa khóa tài khoản ".$ma_kh." !";
                    }
                    echo "<script>window.location.href='customer.php'</script>";
            }
        }
    }
}
?>