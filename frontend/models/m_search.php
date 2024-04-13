<?php
require_once ("database.php");
class m_search extends  database {

    public function read_product_by_name($tu_khoa) {
        $sql = "select * from san_pham where ten_sp like '%$tu_khoa%'";
        $this->setQuery($sql);
        return $this->LoadAllRows();
    }

    public function read_product_by_page($tu_khoa,$item_per_page,$offset) {
        $sql = "select * from san_pham where ten_sp like '%$tu_khoa%' limit $item_per_page offset $offset";
        $this->setQuery($sql);
        return $this->LoadAllRows();
    }
}
?>