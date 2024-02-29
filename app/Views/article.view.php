<?php
$title= "article";
require_once(__DIR__ . "/partials/head.php") ?>

<h1>Page article</h1>

<ul>

<?php 
foreach ($articles as $article){
    echo '<li>' .$article['title'] . '-'.$article['text'] . '-' .$article['date'] . '</li>';
    echo "<a class='btn btn-primary' href='/article-read?id=" . $article['id'] . "'>View article</a>";
    echo "<a class='btn btn-warning' href='/article-update?id=" . $article['id'] . "'>update</a>";
    echo "<a class='btn btn-danger' href='/article-delete?id=" . $article['id'] . "'>Delete</a>";
} ?>
</ul>
<?php require_once(__DIR__ . "/partials/footer.php") ?>