<?php
$title= "article";
require_once(__DIR__ . "/partials/head.php") ?>

<h1 class='text-center my-5'> Welcome</h1>

<h2 class='text-center lead'>Last articles</h2>
<div class="row p-5">
    <?php
    foreach ($articles as $article) {
    ?>
        <div class="col-md-4  mb-2 ">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $article['title']; ?></h5>
                    <p class="card-text"><?php echo $article['text']; ?></p>
                    <p class="card-text"><?php echo $article['date']; ?></p>
                    <p class="card-text"><?php echo $article['name']; ?></p>
                    <?php
                     echo "<a class='btn btn-primary' href='/article-read?id=" . $article['id'] . "'>View article</a>";
                     if (isset($_SESSION['user']))  {
                        if ($_SESSION['user']['idUser'] === ($article['id_user'])|| $_SESSION['user']['admin'] == true) { 
                        echo "<a class='btn btn-warning' href='/article-update?id=" . $article['id'] . "'>update</a>";
                        echo "<a class='btn btn-danger' href='/article-delete?id=" . $article['id']. "'>Delete</a>";
                    }
                    
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php

















