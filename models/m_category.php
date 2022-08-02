<?php
class m_category extends Database{

    public function insert_category($id, $name, $slug, $description, $image){
        $sql = "INSERT INTO categories (id, name, slug, description, image) VALUES (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $name, $slug, $description, $image));
    }

    public function select_category(){
        $sql = "SELECT * FROM categories";
        $this->setQuery($sql);
        return $this->loadAllRows(array());
    }

    public function select_category_with_id($id){
        $sql = "SELECT * FROM categories WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function update_category( $name, $slug, $description, $image, $updated_at, $id) {
        $sql  = "UPDATE categories SET name = ?, slug = ?, description = ?, image = ?, updated_at = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute(array( $name, $slug, $description, $image, $updated_at, $id));
    }
}