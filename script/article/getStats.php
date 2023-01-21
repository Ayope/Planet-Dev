<?php 

include_once "../../classes/article.php";

function getStatis($param){
    
    return Article::getStats($param);
    
}