<?php
include ("database.php");

class m_cart extends database {

    public function select_product_by_id_product($ma_sp) {
        $sql = "select * from san_pham where ma_sp = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_sp));
    }

    public function delete_product_in_cart($ma_sp) {
        $sql = "delete from san_pham where ma_sp = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_sp));
    }


}
?>