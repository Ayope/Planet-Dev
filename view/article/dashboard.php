<?php
    include_once "../../script/article/getAr.php";
    include_once "../../script/article/getStats.php";

    
    session_start();
    
    if(!isset($_SESSION['name'])){
        header('location: ../../index.php');
    }

    echo $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/styles/style.css">
    <title>Dashboard</title>
</head>
<body>

    <div class="d-flex justify-content-around mb-5">

    <div class="card" style="width: 13rem;">
        <div class="card-body text-center">
            <h2 class="card-title">Users</h2>
            <h3 class="card-text fw-bold">Coming Soon</h3>
        </div>
    </div>

    <div class="card" style="width: 13rem;">
        <div class="card-body text-center">
            <h2 class="card-title">Articles</h2>
            <h3 class="card-text fw-bold"><?= getStatis('articles');?></h3>
        </div>
    </div>

    <div class="card" style="width: 13rem;">
        <div class="card-body text-center">
            <h2 class="card-title">Categories</h2>
            <h3 class="card-text fw-bold"><?= getStatis('categories');?></h3>
        </div>
    </div>

    </div>

    <!-- Use datatables.net later-->

    <div class="table-responsive">

    
    <div class="container-fluid border">
    <a href="./addAr.php" class="btn btn-primary">+ ADD</a>
    <table class="table table-striped ">
        <thead>
            <tr>
            <th scope="col">Title</th>
            <th scope="col">Article</th>
            <th scope="col">Categorie</th>
            <th scope="col">Author</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($data as $row):
            ?>
                <tr>
                    <td><?= $row['title']?></td>
                    <td><?= $row['article']?></td>
                    <td><?= $row['categorie']?></td>
                    <td><?= $row['author']?></td>
                    <td>
                        <a href="modifyAr.php?id=<?= $row['id']?>" class="btn btn-primary">modify</a>
                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="SendId(<?= $row['id']?>)">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    </div>

    <div class="modal" tabindex="-1" id="deleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Delete it</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to delete !?</p>
        </div>
        <div class="modal-footer">
            <form action="../../script/article/deleteAr.php" method="POST">
                <input type="hidden" name="id" id="id" value="">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        </div>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../../assets/js/main.js"></script>
</body>