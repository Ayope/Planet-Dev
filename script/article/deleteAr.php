<?php
include_once "../../classes/article.php";

Article::deleteArticle($_POST['id']);
header("Location: ../../view/article/dashboard.php");
