<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

        <?php
        // si la variable tittlt existe olors on affiche le contenue
        if (isset($title)) {
            echo $title;
        }  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-info ">
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/"> <img src="public/img/images.png" height="60"></a>

            </li>


            <li class="nav-item">
                <a class="nav-link" href="/">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/article">Article</a>
            </li>
            
            <?php if (isset($_SESSION['user']) && $_SESSION['user']['admin'] == true) { ?>
            <li class="nav-item">
                <a class="nav-link" href="/admin">Admin</a>
            </li>
                <?php } ?>
           
                <?php if (isset($_SESSION['user'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href=" logout"> Logout</a>
                    </li>
                    <li class="nav-item">
                <a class="nav-link" href="/connect">connect</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/article-create">article create</a>
            </li>
                </li>
              
            <?php

            } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="login"> Login </a>
                    <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
            </li>
                </li><?php } ?>




          
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="/mentions-legales">Mentions Legales</a>
            </li>
         
            
            <li class="nav-item">
                <a class="nav-link" href="/product-create">creation</a>
            </li>

            <?php if (!isset($_SESSION['user'])) { ?>
            <li class="nav-item">
                <a class="nav-link" href="/register">Registre</a>
            </li>

            <?php } else { ?>
                <li class="nav-item">
                <a class="nav-link" href="/logout">logout</a>
            </li>
            <?php if ($_SESSION['user']['admin'] == true) { ?>
            <li class="nav-item">
                <a class="nav-link" href="/admin">Admin</a>
            </li>
            <?php }
            } ?> -->
        </ul>
    </nav>