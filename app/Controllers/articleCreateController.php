<?php


if($_SESSION['user']){

    $id_user = $_SESSION['user']['idUser'];
    if (isset($_POST['title']) && isset($_POST['text']) && isset($_POST['date']) && $_POST['date'] > 0 && strlen($_POST['title']) > 2) {
        // je recupere les elements du formulaire
        $title = $_POST['title'];
        $text = $_POST['text'];
        $date = $_POST['date'];
      
        // je cree ma requete
        $articleQuery = "INSERT INTO article (title,text,date, id_user) VALUE (:title, :text, :date, :id_user)";
        // je prepare ma requete sql et l'envoie
        $articleStatement = $mysqlClient->prepare($articleQuery);
        // je modifie les valeurs de ma requete en fonction des valeurs du formulaire
        $articleStatement->bindParam(':title', $title);
        $articleStatement->bindParam(':text', $text);
        $articleStatement->bindParam(':date', $date);
        $articleStatement->bindParam(':id_user', $id_user);
        // j'execute la requte
        $articleStatement->execute();
        // je rederige l'utilisateur vers la page article pour qu'il vois le nouveau produit
        header('Location: /article');
        exit();
    } 
} else {
    $error = "incorrect Email or password" ;
}

require_once(__DIR__ . "/../views/articleCreate.view.php");