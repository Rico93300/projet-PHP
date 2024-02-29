<?php
$title= "accueil";
require_once(__DIR__ . "/partials/head.php") ?>

<div class="row justify-content-center">
        <h2 class="text-center">bonjour <?php $_SESSION['user']= $user['user']; ?></h2>
        
    </div>
<?php require_once(__DIR__ . "/partials/footer.php") ?>