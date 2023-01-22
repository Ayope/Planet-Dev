<?php
    include '../../classes/db.php';

    if(isset($_POST['login'])){
        $db = new DbConnect;

        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "SELECT username, email, password FROM users WHERE email = '$email' and password = '$password';";
        
        $exec = $db->connect_pdo()->query($sql);
        
        $row = $exec->rowCount();

        if($row != 0){
            $data = $exec->fetchAll();
            $_SESSION['name'] = $data[0]['username'];
            header("location: ../../view/article/dashboard.php");
        }else{
            // echo '<div class="alert alert-danger" role="alert">Account not Exist</div>';
            header("location: ../../index.php");
        }
    }
?>