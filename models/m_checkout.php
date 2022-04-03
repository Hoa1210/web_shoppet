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
    public function insert_order($ma_hd, $ma_kh, $tong_tien, $phuong_thuc_thanh_toan,$ngay_thanh_toan,$trang_thai) {
        $sql = "INSERT INTO hoa_don (ma_hd, ma_kh, tong_tien, phuong_thuc_thanh_toan, ngay_thanh_toan, trang_thai) 
                VALUES ('$ma_hd', '$ma_kh', '$tong_tien', '$phuong_thuc_thanh_toan', '$ngay_thanh_toan', '$trang_thai')";
        $this->setQuery($sql);
        return $this->execute(array($ma_hd, $ma_kh, $tong_tien, $phuong_thuc_thanh_toan,$ngay_thanh_toan,$trang_thai));
    }
}
?>