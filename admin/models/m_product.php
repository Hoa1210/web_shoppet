<?php
require_once ("database.php");
class m_product extends database {

//    thêm sản phẩm
    public function insert_product($ma_sp,$ma_loai_sp,$ten_sp,$hinh_anh,$so_luong,$gia_ban,$thong_tin_them,$trang_thai){
        $sql = "insert into san_pham values (?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_sp,$ma_loai_sp,$ten_sp,$hinh_anh,$so_luong,$gia_ban,$thong_tin_them,$trang_thai));
    }
// thêm hinh ảnh chi tiết sản phẩm
    public function insert_img_product($id_anh, $ma_sp, $hinh_anh) {
        $sql = "INSERT INTO anh_sp VALUES (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id_anh, $ma_sp, $hinh_anh));
    }
//    lấy thông tin của 2 bảng sản phẩm và loại sp
    public function select_product() {
        $sql = "select *
                from san_pham 
                inner join loai_sp 
                on san_pham.ma_loai_sp = loai_sp.ma_loai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

//    lấy thông tin theo mã sp
    public function select_product_by_id_product($ma_sp) {
        $sql = "select * from san_pham where ma_sp = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_sp));
    }

// lấy thông tin ảnh chi tiết sản phẩm
    public function select_img_product_by_id_product($ma_sp) {
    $sql = "select * from anh_sp where ma_sp = ?";
    $this->setQuery($sql);
    return $this->loadAllRows(array($ma_sp));
    }
//    sửa sản phẩm
    public function edit_product($ma_sp,$ma_loai_sp,$ten_sp,$hinh_anh,$so_luong,$gia_ban,$thong_tin_them,$trang_thai){
        $sql = "update  san_pham set ma_loai_sp = ?, ten_sp = ? , hinh_anh = ?, so_luong = ?, gia_ban = ?, thong_tin_them = ?, trang_thai_sp = ? 
                where ma_sp = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai_sp,$ten_sp,$hinh_anh,$so_luong,$gia_ban,$thong_tin_them,$trang_thai,$ma_sp));
    }


    //    sửa ảnh chi tiết sản phẩm
    public function edit_img_product( $ma_sp, $hinh_anh){
        $sql = "update  anh_sp set hinh_anh = ? 
            where ma_sp = ?";
        $this->setQuery($sql);
        return $this->execute(array($hinh_anh, $ma_sp));
    }

//    xóa sản phẩm
    public function delete_product($ma_sp) {
        $sql = "delete from san_pham where ma_sp = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_sp));
    }
    //    xóa ảnh chi tiết sản phẩm
    public function delete_image_product($ma_sp) {
        $sql = "delete from anh_sp where ma_sp = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_sp));
    }

//    lấy danh mục sản phẩm
    public function select_product_categories() {
        $sql = "select * from loai_sp";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

//    them loại sản phẩm
    public function add_product_categories($ma_loai, $ten_loai_sp) {
        $sql = "insert into loai_sp values (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai, $ten_loai_sp));
    }

//    xóa loại sp
    public function delete_product_categories($ma_loai) {
        $sql = "delete from loai_sp where ma_loai = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai));
    }

//    lấy loại sản phẩm theo mã
    public function select_product_categories_by_id($ma_loai) {
        $sql = "select * from loai_sp where ma_loai = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_loai));
    }

//    sửa loại sp theo mã
    public function edit_product_categories($ma_loai,$ten_loai_sp) {
        $sql = "update loai_sp set ten_loai_sp = ? where ma_loai = ? ";
        $this->setQuery($sql);
        return $this->execute(array($ten_loai_sp, $ma_loai));
    }
}
