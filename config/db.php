<?php 

try{
    $mysqlClient = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root');
}catch (Exception $e){
    die('ERREUR : ' . $e->getMessage());
}
