<?php
$title= "accueil";
require_once(__DIR__ . "/partials/head.php") ;
if (isset($_SESSION['user'])) { ?>
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
                    <?php
                    if (isset($_SESSION['user']) && $_SESSION['user']['admin'] == true) {
                    ?>
                        <a href="/article-read?id=<?php echo $article['id']; ?>" class="btn btn-sm btn-primary">View article</a>
                        <a href="/article-update?id=<?php echo $article['id']; ?>" class="btn  btn-sm btn-warning">Update article</a>
                        <a href="/article-delete?id=<?php echo $article['id']; ?>" class="btn  btn-sm btn-danger">Delete</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php } else { ?>
    <h1>Bonjour</h1>
    <?php }


require_once(__DIR__ . "/partials/footer.php");
?>
