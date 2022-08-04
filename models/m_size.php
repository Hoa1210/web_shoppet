<?php

class m_size extends Database {

    public function select_all_size(){
        $sql = "SELECT * FROM sizes";
        $this->setQuery($sql);
        return $this->loadAllRows(array());
    }
