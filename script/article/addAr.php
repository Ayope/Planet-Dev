<?php 

include "../../classes/article.php";
session_start();
    
$error;

foreach($_POST['title'] as $key => $value){
    // Security
    $title = trim(stripslashes(htmlspecialchars($value)));
    $article = trim(stripslashes(htmlspecialchars($_POST['article'][$key])));
    $author = trim(stripslashes(htmlspecialchars($_POST['author'][$key])));
    $category = trim(stripslashes(htmlspecialchars($_POST['category'][$key])));

    // Validate email
    if (empty($title)) {
        $error = "Input is required!";
        $_SESSION['message'] = "Input is required!";
        header('location: ../../view/article/addAr.php');
    }

    if (empty($article)) {
        $error = "Input is required!";
        $_SESSION['message'] = "Input is required!";
        header('location: ../../view/article/addAr.php');
    }

    if (empty($author)) {
        $error = "Input is required!";
        $_SESSION['message'] = "Input is required!";
        header('location: ../../view/article/addAr.php');
    }

    if (empty($category)) {
        $error = "Input is required!";
        $_SESSION['message'] = "Input is required!";
        header('location: ../../view/article/addAr.php');
    }
    
    
    if (empty($error)) {
        $article = new Article($title, $article, $author, $category);
        $article->addArticle();
        $_SESSION['success'] = "New Article Added Successfully";

        header("Location: ../../view/article/dashboard.php");
    }
}


