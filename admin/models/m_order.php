<?php
require_once "database.php";

class m_order extends database {

//    lấy dữ liệu đơn hàng
    public function select_order() {
        $sql = "select * from don_hang 
                inner join khach_hang 
                on don_hang.ma_kh = khach_hang.ma_kh";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

//    xóa đơn hàng
    public function delete_order_by_id($ma_dh) {
        $sql = "delete from don_hang where ma_dh = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_dh));
    }
//    xóa chi tiết đơn hàng đơn hàng
    public function delete_order_details_by_id($ma_dh) {
        $sql = "delete from ct_don_hang where ma_dh = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_dh));
    }

    // lấy thông tin chi tiết hóa đơn
    public function select_order_details($ma_dh) {
        $sql = "select san_pham.ten_sp, san_pham.hinh_anh, ct_don_hang.so_luong, san_pham.gia_ban from ct_don_hang inner join san_pham on ct_don_hang.ma_sp = san_pham.ma_sp where ct_don_hang.ma_dh = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_dh));
    }

    // lấy trạng thái theo  đơn hàng
    public function select_status($ma_dh) {
        $sql = "select trang_thai from don_hang where ma_dh = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_dh));
    }
    // cập nhật trạng thái đơn hàng
    public function update_status_order($ma_dh,$trang_thai) {
        $sql = "update don_hang set trang_thai = ? where ma_dh = ?";
        $this->setQuery($sql);
        return $this->execute(array($trang_thai,$ma_dh));
    }
}

?>