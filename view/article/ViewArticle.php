<?php
    include_once "../../script/article/getSpecData.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/styles/style.css">
    <title>Article</title>
</head>
<body>
    <?php include '../includes/navbar.php';?>

    <div class="container vh-75 d-flex justify-content-center align-items-center my-5">
        <div class="card w-100 text-center rounded-0">
            <h1><?=$data1['title']?></h1>
            <div class="d-flex w-100 justify-content-around my-3 flex-wrap">
                <span class="border px-3 py-1 rounded mb-2"><strong>WRITTEN BY</strong> <?=$data1['author']?></span>
                <span class="border px-3 py-1 rounded"><?=$data1['name']?></span>
            </div>

            <p class="px-5"><?=$data1['article']?></p>
        </div>
    </div> 
        
        
</body>
</html>