<?php
$title= "accueil";
require_once(__DIR__ . "/partials/head.php") ;
if (isset($_SESSION['user'])) { ?>
    <h1>Hello</h1>
<?php } else { ?>
    <h1>Bienvenue à toi</h1>
<?php }
require_once(__DIR__ . "/partials/footer.php") ?>