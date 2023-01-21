<?php
    include_once "../../script/article/modifyAr.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/styles/style.css">
    <title>Add Article</title>
</head>
<body>
    <form action="../../script/article/modifyAr.php" method="post">
        <div class= "px-5  py-5 w-75 d-flex flex-column form-control">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

            <div class="d-flex flex-column mb-3">
                <label for="title">title</label>
                <input type="text" name="title" value="<?= $data1['title']?>">
            </div>
            
            <div class="d-flex flex-column mb-3">
                <label for="article">article</label>
                <textarea name="article" cols="30" rows="10" ><?= $data1['article']?></textarea>
            </div>
            
            <div class="d-flex flex-column mb-3">
                <label for="author">author</label>
                <input type="text" name="author" value="<?= $data1['author']?>">
            </div>
            
            <div class="d-flex flex-column mb-3">
                <label for="category">category</label>
                    <select name="category">
                    <?php 
                        include_once "../../script/article/getCatego.php";
                        foreach($data as $row):
                        $selected = ($data1['categorie'] == $row['id']) ? "selected" : "";
                    ?>
                    <option <?=$selected?> value="<?= $row['id']?>"><?= $row['name']?></option>
                    <?php endforeach; ?>
                </select>
            </div>


            <button class="btn btn-primary d-flex justify-content-center" type="submit" name="modify">modify</button>
        </div>
        
    </form>