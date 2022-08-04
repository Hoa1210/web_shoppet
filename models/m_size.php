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

    public function select_size_by_id($id){
        $sql = "SELECT * FROM sizes WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    
    public function update_size_by_id($name, $id){
        $sql = "UPDATE sizes SET name = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array($name, $id));
    }

    public function delete_size_by_id($id){
        $sql = "DELETE FROM sizes WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}