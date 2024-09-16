<?php
class user{
    private $conn;

    public function __construct($conn){
        $this->conn=$conn;
    }

    public function signUp($fullname,$email,$username,$password,$genderId,$roleId){
        $sql="INSERT INTO users(fullname, email, username, password, genderId, roleId) VALUES(:fullname, :email, :username, :password, :genderId, :roleId)";

        $stmt=$this->conn->prepare($sql);

        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':genderId', $genderId);
        $stmt->bindParam(':roleId', $roleId);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function getAllUsers() {
        $sql = "SELECT u.userId, u.fullname, u.email, u.username, u.genderId, u.roleId 
                FROM users u";
                

       
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }
}

?>