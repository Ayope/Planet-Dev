<?php 

include_once __DIR__ . "\db.php";

class Article{
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
        VALUES (?, ?, ?, ?)";
        $stmt = $db->connect_pdo()->prepare($sql);
        $stmt->execute(array($this->title, $this->article, $this->author, $this->category));
    }

    public static function getArticle(){ 
        $db = new DbConnect();

        $sql = "SELECT a.id ,a.title, a.article, a.author, c.name as categorie
        FROM articles as a , categories as c
        WHERE a.categorie = c.id";
        $exec = $db->connect_pdo()->query($sql);
        $data = $exec->fetchAll();

        return $data;
    }

    public static function getSpecData($id){
        $db = new DbConnect();

        $sql = "SELECT * FROM articles, categories WHERE articles.id = '$id' and categories.id = articles.categorie;";
        $exec = $db->connect_pdo()->query($sql);
        $data = $exec->fetch();

        return $data;    
    }

    public static function modifyArticle($id, $title, $article, $author, $categorie){
        $db = new DbConnect();

        $sql = "UPDATE articles SET title= ?, article= ? ,categorie= ? ,author= ? 
        WHERE id =  ?;";
        $stmt = $db->connect_pdo()->prepare($sql);
        $stmt->execute(array($title, $article, $categorie, $author, $id));

    }

    public static function deleteArticle($id){
        $db = new DbConnect();
        $sql = "DELETE FROM articles WHERE id = $id";
        $sql = $db->connect_pdo()->query($sql);
    }

    public static function getCategories(){
        $db = new DbConnect();

        $sql = "SELECT * FROM categories";
        $exec = $db->connect_pdo()->query($sql);

        $data = $exec->fetchAll();
        
        return $data;
    }

    public static function getStats($param){
        global $db;
        $db = new DbConnect();

        if($param == 'articles'){
            $sql = "SELECT * FROM articles";
            $exec = $db->connect_pdo()->query($sql);

            $data = $exec->rowCount();
            return $data;

        }else if($param == 'categories'){
            $sql = "SELECT * FROM categories";
            $exec = $db->connect_pdo()->query($sql);

            $data = $exec->rowCount();
            return $data; 
        } else if($param == 'users'){
            $sql = "SELECT * FROM users";
            $exec = $db->connect_pdo()->query($sql);

            $data = $exec->rowCount();
            return $data; 
        }
    }
}