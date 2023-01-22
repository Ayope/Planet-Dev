<?php 

include "../../classes/article.php";

function addArticle(){
    //Check data
    $article = new Article($_POST['title'], $_POST['article'], $_POST['author'], $_POST['category']);
    $respo = $article->addArticle();

    // if($respo == 'ok'){
        header("Location: ../../view/article/dashboard.php");
    // }
}

addArticle();