<?php
include "database.php";
class m_checkout extends database {

//    lấy thông tin khách hàng
    public function select_infomation_user($ma_kh) {
        $sql = "select * from khach_hang where ma_kh = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_kh));
    }

//    nhập đơn hàng lên database
    public function insert_order($ma_dh, $ma_kh, $tong_tien, $phuong_thuc_thanh_toan,$ngay_thanh_toan,$trang_thai) {
        $sql = "INSERT INTO don_hang  
                VALUES (?,?,?,?,?,?);
                SELECT LAST_INSERT_ID();";
        $this->setQuery($sql);
        $this->execute(array($ma_dh, $ma_kh, $tong_tien, $phuong_thuc_thanh_toan,$ngay_thanh_toan,$trang_thai));
        return $this->getLastId($sql);
    }


//    nhập chi tiết đơn hàng
    public function insert_order_details($ma_hd,$ma_sp,$so_luong){
        $sql = "INSERT INTO ct_don_hang ( ma_dh, ma_sp, so_luong) VALUES (?,?,?);";
        $this->setQuery($sql);
        return $this->execute(array($ma_hd,$ma_sp,$so_luong));
    }

    // lấy thông tin  hóa đơn
    public function select_order_history($ma_kh) {
        $sql = "select * from don_hang inner join khach_hang on don_hang.ma_kh = khach_hang.ma_kh where don_hang.ma_kh = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_kh));
    }

    // lấy thông tin chi tiết hóa đơn
    public function select_order_details($ma_dh) {
        $sql = "select san_pham.ten_sp, san_pham.hinh_anh, ct_don_hang.so_luong, san_pham.gia_ban from ct_don_hang inner join san_pham on ct_don_hang.ma_sp = san_pham.ma_sp where ct_don_hang.ma_dh = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_dh));
    }

    public function add_information($id, $ten_khach_hang, $ngay_sinh, $dia_chi, $so_dien_thoai, $email ) {
        $sql = "INSERT INTO khach_hang VALUES (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array( $id, $ten_khach_hang, $ngay_sinh, $dia_chi, $so_dien_thoai, $email));
    }
}
?>