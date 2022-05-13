<?php
require_once ("database.php");
class m_user extends database {

//    dang nhap
    public function read_user_by_id_pass($ten_dang_nhap, $mat_khau) {
        $sql = "select * from nguoi_dung where ten_dang_nhap = ? and mat_khau = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten_dang_nhap,md5($mat_khau)));
    }

//    kiem tra ten dang nhap  xem da co nguoi dnag ký chua
    public function check_username($ten_dang_nhap) {
        $sql = "select * from nguoi_dung where ten_dang_nhap = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ten_dang_nhap));
    }

    //    kiem tra email  xem da co nguoi dnag ký chua
    public function check_email($email) {
        $sql = "SELECT * from nguoi_dung where email = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($email));
    }
//    dang ky
    public function insert_register($id,$ten_dang_nhap,$email,$mat_khau,$trang_thai) {
        $sql = "INSERT INTO nguoi_dung (id, ten_dang_nhap, email, mat_khau, trang_thai) VALUES (?,?,?,?,?);";
        $this->setQuery($sql);
        return $this->execute(array($id,$ten_dang_nhap,$email,md5($mat_khau),$trang_thai));
    }

//    lay thong tin khach hang
    public function read_information_user($id_user){
        $sql = "SELECT * FROM khach_hang WHERE ma_kh = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_user));
    }

//    sua thong tin khach hang
    public function edit_information_user( $id,$ten_khach_hang, $ngay_sinh, $dia_chi, $so_dien_thoai, $email, $gioi_tinh) {
        $sql = "UPDATE khach_hang 
                SET ten_khach_hang = ?,ngay_sinh = ? ,dia_chi = ?, so_dien_thoai = ?, email = ? , gioi_tinh = ?
                WHERE ma_kh = ?";
        $this->setQuery($sql);
        return $this->execute(array( $ten_khach_hang, $ngay_sinh, $dia_chi, $so_dien_thoai, $email, $gioi_tinh, $id));
    }

    //   tạo id khach voi email khi dnag nhap
    public function add_information_user($id, $email ) {
        $sql = "INSERT INTO khach_hang VALUES (?,'','','','',?,'')";
        $this->setQuery($sql);
        return $this->execute(array( $id,  $email));
    }
}
?>