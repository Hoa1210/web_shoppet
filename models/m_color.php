<?php

class m_color extends Database {

    public function select_all_color(){
        $sql = "SELECT * FROM colors";
        $this->setQuery($sql);
        return $this->loadAllRows(array());
    }

    public function create_color($id, $name){
        $sql = "INSERT INTO colors (id, name) VALUES (?, ?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name));
    }

    public function select_color_by_id($id){
        $sql = "SELECT * FROM colors WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    
    public function update_color_by_id($name, $id){
        $sql = "UPDATE colors SET name = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array($name, $id));
    }

    public function delete_color_by_id($id){
        $sql = "DELETE FROM colors WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}