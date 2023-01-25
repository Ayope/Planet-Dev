<?php
session_start();
include_once "../../classes/article.php";

Article::deleteArticle($_POST['id']);
$_SESSION['success'] = "Article Deleted Successfully";

header("Location: ../../view/article/dashboard.php");
