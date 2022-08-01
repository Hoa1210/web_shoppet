<?php 
class m_product extends Database{

    public function select_product(){
        $sql = "SELECT * FROM products";
        $this->setQuery($sql);
        return $this->loadAllRows(array());
    }
}