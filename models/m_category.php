<?php
class m_category extends Database{

    public function insert_category($id, $name, $slug, $description, $image){
        $sql = "INSERT INTO categories (id, name, slug, description, image) VALUES (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name, $slug, $description, $image));
    }

