<?php
require_once ("database.php");
class m_product extends database {
    public function insert_product($ma_sp,$ten_sp,$hinh_anh,$so_luong,$gia_ban,$thong_tin_them,$trang_thai){
        $sql = "insert into san_pham values (?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_sp,$ten_sp,$hinh_anh,$so_luong,$gia_ban,$thong_tin_them,$trang_thai));
    }

    public function select_product() {
        $sql = "select * from san_pham ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function select_product_by_id_product($ma_sp) {
        $sql = "select * from san_pham where ma_sp = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_sp));
    }

    public function edit_product($ma_sp,$ten_sp,$hinh_anh,$so_luong,$gia_ban,$thong_tin_them,$trang_thai){
        $sql = "update  san_pham set ten_sp = ? , hinh_anh = ?, so_luong = ?, gia_ban = ?, thong_tin_them = ?, trang_thai = ? 
                where ma_sp = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_sp,$hinh_anh,$so_luong,$gia_ban,$thong_tin_them,$trang_thai,$ma_sp));
    }

    public function delete_product($ma_sp) {
        $sql = "delete from san_pham where ma_sp = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_sp));
    }
}
?>