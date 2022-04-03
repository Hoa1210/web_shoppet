<?php
require_once "database.php";

class m_order extends database {

//    lấy dữ liệu đơn hàng
    public function select_order() {
        $sql = "select * from hoa_don 
                inner join khach_hang 
                on hoa_don.ma_kh = khach_hang.ma_kh";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

//    xóa đơn hàng
    public function delete_order_by_id($ma_hd) {
        $sql = "delete from hoa_don where ma_hd = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_hd));
    }
}
?>