<?php 

require_once(__DIR__ . "/../../config/db.php");


// j'ecris ma requete sql que je met dans une variable
$articleQuery="SELECT* FROM article";
// puis je prepare la requete
$articlestatement=$mysqlClient->prepare($articleQuery);
// j'execute la requete
$articlestatement-> execute();
// je recupere le resultat de la requete dans une variable
$articles=$articlestatement->fetchAll();




require_once(__DIR__ . "/../views/home.view.php");  ?>