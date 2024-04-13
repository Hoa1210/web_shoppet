<?php
include ("database.php");

class m_cart extends database {

    // lấy thông tin sp với điều kiện đúng mã sp
    public function select_product_by_id_product($ma_sp) {
        $sql = "select * from san_pham where ma_sp = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_sp));
    }

}
?>