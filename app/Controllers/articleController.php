<?php     

$articleQuery="SELECT article.id, article.title, article.text, article.date, article.id_user, user.name FROM article INNER JOIN user ON article.id_user = user.id";

$articlestatement=$mysqlClient->prepare($articleQuery);

$articlestatement-> execute();

$articles=$articlestatement->fetchAll();
   

require_once(__DIR__ . "/../views/article.view.php");
?>