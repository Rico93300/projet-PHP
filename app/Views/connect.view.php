<?php
$title= "conect";
require_once(__DIR__ . "/partials/head.php") ?>


<?php if (isset($_SESSION['user'])) { 
   
        
            echo '<h1>' . $user['name'] . '-'.$user['email']  . '<h1>';
        } else {
            echo 'no user';
        }
    
    
     
    

   


 require_once(__DIR__ . "/partials/footer.php") ?>