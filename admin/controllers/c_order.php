<?php
include_once ("../admin/models/m_order.php");
class c_order {

    public function order() {

        $m_order = new m_order();
        $list_order = $m_order->select_order();

        $view = "views/order/v_order.php";
        include_once "templates/layout.php";
    }

    public function delete_order() {
        if(isset($_GET['ma_hd'])) {
            $ma_hd = $_GET['ma_hd'];

            $m_order = new m_order();
            $delete = $m_order->delete_order_by_id($ma_hd);

            if($delete) {
                echo "<script>alert('Xóa thành công'); window.location.href='order.php'</script>";
            }
        }
    }
}
?>