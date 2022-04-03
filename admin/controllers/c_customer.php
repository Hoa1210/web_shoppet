<?php
include_once ("../admin/models/m_customer.php");
class c_customer {

    public function list_customer() {

        $m_customer = new m_customer();
        $list_customer = $m_customer->select_information();

        $view = "views/customer/v_customer.php";
        include "templates/layout.php";
    }

    public function delete_customer() {
        if(isset($_GET['ma_kh'])) {
            $ma_kh = $_GET['ma_kh'];

            $m_customer = new m_customer();
            $delete = $m_customer->delete_customer_by_id($ma_kh);
            if($delete) {
                echo "<script>alert('Xóa thành công');window.location.href='customer.php'</script>";
            }
        }
    }
}
?>