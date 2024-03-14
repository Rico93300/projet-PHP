<?php


if (isset($_GET['id'])&& isset($_SESSION['user'])) {
    $id = $_GET['id'];

    $articleQuery = "DELETE  FROM article WHERE id = :id";
    $articleStatement = $mysqlClient->prepare($articleQuery);
    $articleStatement->bindParam(':id', $id);
    $articleStatement->execute();
   

    redirectToRoute('/article');
}else{
    http_response_code(404);
    require_once(__DIR__ . "/404.php");
    exit;
}