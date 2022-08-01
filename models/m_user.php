<?php 
class m_user extends Database{

    public function register($id, $username, $email, $password){
        $sql = "INSERT INTO users (id, username, email, password) VALUES (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $username, $email, $password));
    }

    public function check_account($email,$password){
        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email,$password));
    }
}
?>