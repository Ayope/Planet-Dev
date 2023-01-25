<?php

include "../../classes/article.php";

    session_start();
    
    $error;
    // Security
    $id = $_POST['id'];
    $title = trim(stripslashes(htmlspecialchars($_POST['title'])));
    $article = trim(stripslashes(htmlspecialchars($_POST['article'])));
    $author = trim(stripslashes(htmlspecialchars($_POST['author'])));
    $category = trim(stripslashes(htmlspecialchars($_POST['category'])));

    // Validate email
    if (empty($title)) {
        $error = "Input is required!";
        $_SESSION['message'] = "Input is required!";
        header('location: ../../view/article/modifyAr.php');
    }

    if (empty($article)) {
        $error = "Input is required!";
        $_SESSION['message'] = "Input is required!";
        header('location: ../../view/article/modifyAr.php');
    }

    if (empty($author)) {
        $error = "Input is required!";
        $_SESSION['message'] = "Input is required!";
        header('location: ../../view/article/modifyAr.php');
    }

    if (empty($category)) {
        $error = "Input is required!";
        $_SESSION['message'] = "Input is required!";
        header('location: ../../view/article/modifyAr.php');
    }
    
    
    if (empty($error)) {
        Article::modifyArticle($id, $title, $article, $author, $category);
        header("Location: ../../view/article/dashboard.php");
        $_SESSION['success'] = "Article Modified Successfully";
    }

