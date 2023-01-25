<?php
    include_once "../../script/article/getSpecData.php";

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
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/styles/style.css">
    <title>Modify Article</title>
</head>
<body>
    <?php 
        include '../includes/navbar.php';
        if(isset($_SESSION['message'])){?>
            <div class="alert alert-danger alert-dismissible mx-4" role="alert">
            <strong>Wrong!</strong> <?=$_SESSION['message']?>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>

    <?php   
        $_SESSION['message'] = NULL;
        }
    ?>
    ?>

    <form action="../../script/article/modifyAr.php" method="post" class="container" data-parsley-validate="parsley">
        <div class= "d-flex flex-column form-control mb-5 pb-3">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

            <div class="d-flex flex-column mb-3">
                <label for="title">title</label>
                <input type="text" name="title" value="<?= $data1['title']?>" required>
            </div>
            
            <div class="d-flex flex-column mb-3">
                <label for="article">article</label>
                <textarea name="article" cols="30" rows="10" required><?= $data1['article']?></textarea>
            </div>
            
            <div class="d-flex flex-column mb-3">
                <label for="author">author</label>
                <input type="text" name="author" value=<?= $data1['author']?> required>
            </div>
            
            <div class="d-flex flex-column mb-3">
                <label for="category">category</label>
                    <select name="category" required>
                    <?php 
                        include_once "../../script/article/getCatego.php";
                        foreach($data as $row):
                        $selected = ($data1['categorie'] == $row['id']) ? "selected" : "";
                    ?>
                    <option <?=$selected?> value="<?= $row['id']?>"><?= $row['name']?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="d-flex flex-wrap justify-content-center w-100">
                <button class="btn btn-primary d-flex justify-content-center me-3" type="submit" name="modify">modify</button>
                <a href="../article/dashboard.php" class="btn btn-secondary d-flex justify-content-center">Cancel</a>
            </d>
        </div>
        
    </form>

    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>