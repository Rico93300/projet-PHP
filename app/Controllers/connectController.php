<?php 


if($_SESSION['user']){
    $id = $_SESSION['user']['idUser'];
    $userQuery = "SELECT * FROM user WHERE id = :id";
    $userStatement = $mysqlClient->prepare($userQuery);
    $userStatement->bindParam(':id', $id);
    $userStatement->execute();
    $user = $userStatement->fetch();}


require_once(__DIR__ . "/../views/connect.view.php");