<?php

    include_once "../../classes/admin.php";

    session_start();

    if(isset($_POST['login'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        //security
        $email = trim(stripslashes(htmlspecialchars($email)));
        $password = trim(stripslashes(htmlspecialchars($password)));
        
        // Validate email
        if (empty($email)) {
            $email_error = "Email is required!";
            $_SESSION['message'] = "Email is required!";
            header('location: ../../view/account/login.php');

        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Email is invalid format";
            $_SESSION['message'] = "Invalid email format!";
            header('location: ../../view/account/login.php');
        }
        
        // Validate password
        if (empty($password)) {
            $password_error = "Password is required";
            $_SESSION['message'] = "Password is required !";
            header('location: ../../view/account/login.php');
        
        } elseif (strlen($password) < 8) {
            $password_error = "Password must be at least 8 characters!";
        
            $_SESSION['message'] = "Password must be at least 8 characters!";
            
            header('location: ../../view/account/login.php');
        }
        
        
        if (empty($email_error) && empty($password_error)) {
            
            $Admin = new Admin($email, $password);
            $response = $Admin->Login();

            if($response == 'Account not Exist'){
                $_SESSION['message'] = $response;
                header("location: ../../index.php");
            }else{
                $_SESSION['name'] = $response['username'];
                header("location: ../../view/article/dashboard.php");
            }

        }

    }


