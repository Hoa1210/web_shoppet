<?php
require_once ("database.php");
class m_product extends database {
    // lấy thông tin sp trên database
    public function read_product() {
        $sql = "select * from san_pham";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }


    // phân trang
    public  function read_product_by_page($item_per_page,$offset) {
        $sql = "SELECT * FROM san_pham LIMIT $item_per_page OFFSET $offset ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // lấy thông tin danh mục sp trên database
    public function read_type_product() {
        $sql = "select * from loai_sp";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // lấy thông tin sp trên db
    public function select_product_by_id_product($ma_sp) {
        $sql = "select * from san_pham where ma_sp = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_sp));
    }

     // lấy ảnh sản phẩm chi tiết
     public function read_img_product($ma_sp) {
        $sql = "SELECT hinh_anh FROM anh_sp WHERE ma_sp = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_sp));
    }
}
?>