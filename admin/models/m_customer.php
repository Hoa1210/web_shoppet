<?php
require_once "database.php";
class m_customer extends database {

    public function select_information() {
        $sql = "select * from khach_hang";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function delete_customer_by_id($ma_kh) {
        $sql = "delete from khach_hang where ma_kh = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_kh));
    }
}
?>