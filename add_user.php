<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'includes/dbConnection.php';
require 'user.php';
require "includes/constants.php";


try{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $genderId = $_POST['genderId'];
    $roleId = $_POST['roleId'];


    $db = new dbConnection(DBTYPE, Hostname, Username, Password, Database, Port);
    $conn = $db->getConnection();

    $user=new User($conn);

    if($user->signUp($fullname, $email, $username, $password, $genderId, $roleId)){
        echo "User added successfully";
    }else{
        echo "User not added";
    }
}
}catch(Exception $e){
    echo $e->getMessage();

}
