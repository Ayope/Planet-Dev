<?php
    session_start();
    
    if(isset($_SESSION['name'])){
        header('location: ./view/article/dashboard.php');
    }

    if(isset($_SESSION['message'])){
    ?>
        <div class="alert alert-danger alert-dismissible mx-4 mt-3" role="alert">
        <strong>Wrong!</strong> <?=$_SESSION['message']?>
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php    
        $_SESSION['message'] = NULL;
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
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!---->
    
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@300&display=swap" rel="stylesheet">
    <!---->

</head>
<body style="background-color: #63cb85; font-family: 'Sofia Sans', sans-serif;">
    <div class="d-flex justify-content-center align-items-center vh-100 flex-column">

        <h1>
            <i class="bi bi-door-open" style="font-size: 100px"></i>
            <h1 >LOG IN</h1>
        </h1>

        <form action="./script/user/login.php" method="POST" data-parsley-validate="parsley">
        
        <div class="pb-3">
            <label for="email_inpt1" id="emaiLabel">Email</label>
            <input type="email" id="email_inpt1" class="form-control" name="email" size="35" 
            data-parsley-trigger="keyup" data-parsley-type="email" data-parsley-required-message="Email is required" required>
        </div>

        <div>
            <label for="pass_inpt1" id="passLabel">Password</label>
            <input type="password" id="pass_inpt1" 
            data-parsley-minlength="8"
            data-parsley-required-message="Password is required"
            data-parsley-required 
            class="form-control " name="password" required>

        </div>

        <div class="mt-2 text-center">
            <button id="login" type="submit" class="mt-2 w-50 rounded-pill p-2 text-white fw-bold" style="border:none; background: #172f1e;" name="login">Login</button>
        </div>

        </form>

    </div>

    <script src="./assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>