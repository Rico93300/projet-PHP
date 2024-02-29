<?php
$title= $article['title'];
require_once(__DIR__ . "/partials/head.php") ?>

<h1>article read</h1>



<?php 
echo $article['title'] . '-' . $article['text'] .'-' . $article['date'];

 require_once(__DIR__ . "/partials/footer.php") ?>