<?php
require_once ("database.php");
class m_user extends database {

//    dang nhap
    public function read_user_by_id_pass($ten_dang_nhap, $mat_khau) {
        $sql = "select * from nguoi_dung where ten_dang_nhap = ? and mat_khau = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten_dang_nhap,md5($mat_khau)));
    }

//    kiem tra ten dang nhap va email xem da co nguoi dnag ký chua
    public function read_pass_or_email_user($ten_dang_nhap, $email) {
        $sql = "select * from nguoi_dung where ten_dang_nhap = ? or email = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ten_dang_nhap, $email));
    }

//    dang ky
    public function insert_register($id,$ten_dang_nhap,$email,$mat_khau,$trang_thai) {
        $sql = "INSERT INTO nguoi_dung (id, ten_dang_nhap, email, mat_khau, trang_thai) VALUES (?,?,?,?,?);";
        $this->setQuery($sql);
        return $this->execute(array($id,$ten_dang_nhap,$email,md5($mat_khau),$trang_thai));
    }

//    lay thong tin khach hang
    public function read_information_user($id_user){
        $sql = "select * from khach_hang where ma_kh = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_user));
    }

//    sua thong tin khach hang
    public function edit_information_user( $id,$ten_khach_hang, $ngay_sinh, $dia_chi, $so_dien_thoai, $email) {
        $sql = "UPDATE khach_hang 
                SET ten_khach_hang = ?,ngay_sinh = ? ,dia_chi = ?, so_dien_thoai = ?, email = ? 
                WHERE ma_kh = ?";
        $this->setQuery($sql);
        return $this->execute(array( $ten_khach_hang, $ngay_sinh, $dia_chi, $so_dien_thoai, $email, $id));
    }

    //    them thong tin khach hang
    public function add_information_user($id, $ten_khach_hang, $ngay_sinh, $dia_chi, $so_dien_thoai, $email ) {
        $sql = "INSERT INTO khach_hang VALUES (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array( $id, $ten_khach_hang, $ngay_sinh, $dia_chi, $so_dien_thoai, $email));
    }
}
?>