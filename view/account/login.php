<?php
    session_start();
    
    if(isset($_SESSION['name'])){
        header('location: ./view/article/dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
	<meta content="" name="author" />
    <title>Login</title>

    <!-- connection with css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="assets/css/main.css" rel="stylesheet"/> 
    <!---->
</head>
<body>
    

    <div class="d-flex justify-content-center align-items-center vh-100">
        
        <form action="script/user/login.php" method="POST">
        
        <div class="pb-3">
            <label for="email_inpt1" id="emaiLabel">Email</label>
            <input type="email" id="email_inpt1" class="form-control"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Invalid email address" name="email" required>
        </div>

        <div>
            <label for="pass_inpt1" id="passLabel">Password</label>
            <input type="password" id="pass_inpt1" class="form-control " size="25" name="password" required>
        </div>

        <div class="mt-2 text-center">
            <button id="login" type="submit" class="mt-2 w-50 rounded-pill p-2 text-white fw-bold" style="border:none; background: #523A28;" name="login">Login</button>
        </div>

        </form>

    </div>

</body>
</html>