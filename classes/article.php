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
        foreach($this->title as $key => $value){
            $sql = "INSERT INTO articles (title, article, author, categorie) 
            VALUES ('".$value."', '".$this->article[$key]."', '".$this->author[$key]."', '".$this->category[$key]."');";
            $exec = $db->connect_pdo()->query($sql);
        }
        
        // if($exec){
        //     return "ok";
        // }else{
        //     return "data not inserted"; //Do it in an alert
        // }
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

    public static function getArticleToModify($id){
        $db = new DbConnect();

        $sql = "SELECT * FROM articles WHERE id = '$id'";
        $exec = $db->connect_pdo()->query($sql);
        $data = $exec->fetch();

        return $data;    
    }

    public static function modifyArticle($id, $title, $article, $author, $categorie){
        $db = new DbConnect();

        $sql = "UPDATE `articles` SET `title`='$title',`article`='$article',`categorie`='$categorie',`author`='$author' 
        WHERE id = '$id';";
        $exec = $db->connect_pdo()->query($sql);
        
        if($exec){
            return "ok";
        }else{
            return "data not updated"; //Do it in an alert
        }
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