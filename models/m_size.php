<?php

class m_size extends Database {

    public function select_all_size(){
        $sql = "SELECT * FROM sizes";
        $this->setQuery($sql);
        return $this->loadAllRows(array());
    }

    public function create_size($id, $name){
        $sql = "INSERT INTO sizes (id, name) VALUES (?, ?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name));
    }
}