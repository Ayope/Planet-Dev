<?php
    include_once "../../script/article/getAr.php";
    include_once "../../script/article/getStats.php";

    
    session_start();
    
    if(!isset($_SESSION['name'])){
        header('location: ../../index.php');
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

    <link rel="stylesheet" href="../../assets/styles/style.css">
    <title>Dashboard</title>

</head>
<body>
    <?php
        include '../includes/navbar.php';
    ?>

    

    <div class="d-flex justify-content-between">
        <h1 class="text-white mb-4 ms-3">Welcome <?php echo $_SESSION['name'];?> 👋, here is your dashboard!</h1>

    
    </div>
    
    <div class="d-flex justify-content-around flex-wrap mb-4">
        
    <div class="card  mb-3" style="width: 13rem;">
        <div class="card-body text-center rounded" style="background-color:#63cb85">
            <h2 class="card-title">Users</h2>
            <h3 class="card-text fw-bold"><?= getStatis('users');?></h3>
        </div>
    </div>

    <div class="card  mb-3" style="width: 13rem;" >
        <div class="card-body text-center rounded" style="background-color:#63cb85">
            <h2 class="card-title">Articles</h2>
            <h3 class="card-text fw-bold"><?= getStatis('articles');?></h3>
        </div>
    </div>
    
    <div class="card  mb-3" style="width: 13rem;">
        <div class="card-body text-center rounded" style="background-color:#63cb85">
            <h2 class="card-title">Categories</h2>
            <h3 class="card-text fw-bold"><?= getStatis('categories');?></h3>
        </div>
    </div>

    </div>
    

    <div class="container col-md mb-5 ">
    <?php
        if(isset($_SESSION['success'])){
    ?>
        <div class="alert alert-success alert-dismissible fade show mx-4" role="alert">
            <strong>Success!</strong> <?=$_SESSION['success']?>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php        
        $_SESSION['success'] = NULL;
    }
    ?>
    
    <div class="table-responsive text-light bg-dark p-3 rounded" style="color:#fffff;">
        
    <table id="table" class="table table-striped">
        <thead>
        <tr>
            <th scope="col" class="text-white">Title</th>
            <th scope="col" class="text-white">Article</th>
            <th scope="col" class="text-white">Categorie</th>
            <th scope="col" class="text-white">Author</th>
            <th scope="col" class="text-white">Actions</th>
        </tr>
        </thead>
        <tbody>
            <?php 
                foreach($data as $row):
            ?>
                <tr>
                    <td class="td text-white"><?= $row['title']?></td>
                    <td  class="article td text-white" name="article"><?= $row['article']?></td>
                    <td class="td text-white"><?= $row['categorie']?></td>
                    <td class="td text-white"><?= $row['author']?></td>
                    <td>
                        <a href="modifyAr.php?id=<?= $row['id']?>" class="btn btn-primary mb-2">modify</a>
                        <button class="btn btn-danger mb-2" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="SendId(<?= $row['id']?>)">Delete</button>
                        <a class="btn btn-success mb-2" href="./ViewArticle.php?id=<?=$row['id']?>">View</a>
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

    <script src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous">
    </script>
    
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="../../assets/js/main.js"></script>
    
    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>
</body>
</html>