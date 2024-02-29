<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $articleQuery = "SELECT * FROM article WHERE id = :id";
    $articleStatement = $mysqlClient->prepare($articleQuery);
    $articleStatement->bindParam(':id', $id);
    $articleStatement->execute();
    $article = $articleStatement->fetch();

    if (!$article) {
        require_once(__DIR__ . "/404.php");
        exit;
    }
}else{
    require_once(__DIR__ . "/404.php");
        exit; 
}
require_once(__DIR__ . "/../views/articleRead.view.php");