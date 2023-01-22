<?php

include "../../classes/article.php";


if(isset($_POST['modify'])){
    //Check data
    Article::modifyArticle($_POST['id'], $_POST['title'], $_POST['article'], $_POST['author'], $_POST['category']);
    header("Location: ../../view/article/dashboard.php");
}else{
    $data1 = Article::getArticleToModify($_GET['id']);
}

