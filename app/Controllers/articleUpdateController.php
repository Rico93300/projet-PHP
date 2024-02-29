<?php


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $articleQuery = "SELECT * FROM article WHERE id = :id";
    $articleStatement = $mysqlClient->prepare($articleQuery);
    $articleStatement->bindParam(':id', $id);
    $articleStatement->execute();
    $article = $articleStatement->fetch();
}
if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['date']) && $_POST['date'] > 0 && strlen($_POST['title']) > 2) {

    $title = $_POST['title'];
    $text = $_POST['text'];
    $date = $_POST['date'];
    // var_dump($_POST); 
    // die;
    $updateQuery = "UPDATE article SET title=:title, text=:text, date=:date WHERE id =:id";
    $updateStatement = $mysqlClient->prepare($updateQuery);
    $updateStatement->bindParam(':title', $title);
    $updateStatement->bindParam(':text', $text);
    $updateStatement->bindParam(':date', $date);
    $updateStatement->bindParam(':id', $id);
    $updateStatement->execute();


    redirectToRoute('/article');
}
require_once(__DIR__ . "/../views/articleUpdate.view.php");
