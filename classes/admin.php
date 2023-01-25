<?php 

include 'db.php';

class Admin{

    private $email;
    private $password;

    public function __construct($email, $password){
        $this->email = $email ;
        $this->password = $password;
    }

    public function Login(){
        $db = new DbConnect;

        $sql = "SELECT username, email, password FROM users WHERE email = '$this->email' and password = '$this->password';";
            
        $exec = $db->connect_pdo()->query($sql);
        
        $row = $exec->rowCount();

        if($row != 0){
            $data = $exec->fetch();
            return $data;
        }else{
            return 'Account not Exist';
        }
    }
}