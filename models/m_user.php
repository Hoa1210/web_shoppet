<?php
require_once ("database.php");
class m_user extends database {


    public function read_user_by_id_pass($ten_dang_nhap, $mat_khau) {
        $sql = "select * from nguoi_dung where ten_dang_nhap = ? and mat_khau = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten_dang_nhap,md5($mat_khau)));
    }

    public function insert_register($ten_dang_nhap,$email,$mat_khau) {
        $sql = "insert into nguoi_dung values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ten_dang_nhap,$email,md5($mat_khau)));
    }

    public function info_user() {
        $sql = "insert into nguoi_dung ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>