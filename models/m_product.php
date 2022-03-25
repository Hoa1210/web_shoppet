<?php
require_once ("database.php");
class m_product extends database {
    public function read_product() {
        $sql = "select * from san_pham";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>