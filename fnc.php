<?php
class fnc{
    //class with attributes
    var $name;
    public $fname;
    public $yob;
    public $age;
    protected $username;
    private $password;

    //class with methods
    public function computer_user($fname){
        return $fname;
    }
    public function user_age($yob,$fname){
       $user=$this->computer_user($fname);
        $age=(int)date("Y")-(int)$yob;
        return $user ." is " . $age;
    }

    public function hash_pass($pass){
        return password_hash($pass,PASSWORD_DEFAULT);
    }
}
   
 ?>   
