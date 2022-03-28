<?php
include ("database.php");

class m_products_details extends database {

    // lấy thông tin sp trên db
    public function select_product_by_id_product($ma_sp) {
        $sql = "select * from san_pham where ma_sp = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_sp));
    }

}
?>