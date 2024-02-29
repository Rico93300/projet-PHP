<?php 




$articleQuery="SELECT* FROM article";

$articlestatement=$mysqlClient->prepare($articleQuery);

$articlestatement-> execute();

$articles=$articlestatement->fetchAll();



require_once(__DIR__ . "/../views/article.view.php");
?>