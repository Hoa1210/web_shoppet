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
}
?>