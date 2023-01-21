<?php 

include_once "./db.php";

class article{
    private $title;
    private $article;
    private $author;
    private $category;

    public function __construct($title, $article, $author, $category){
        $this->title = $title;
        $this->article = $article;
        $this->author = $author;
        $this->category = $category;
    }

    public function addArticle(){
        $db = new DbConnect();

        $sql = "INSERT INTO articles (title, article, author, categorie) 
        VALUES ('$this->title', '$this->article', '$this->author', '$this->category');";
        $db->connect_pdo()->prepare($sql);
        

    }

    public function getArticle(){ 

    }

}