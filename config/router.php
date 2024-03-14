<?php
require_once(__DIR__ . "/db.php");
require_once(__DIR__ . "/function.php");
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'HomeController.php',
    '/login' => 'loginController.php',
    '/logout' => 'logoutController.php',
    '/register' => 'registerController.php',
    '/admin' => 'adminController.php',
    '/admin-update' => 'adminUpdateController.php',
    '/admin-delete' => 'adminDeleteController.php',
    '/article' => 'articleController.php',
    '/article-read' => 'articleReadController.php',
    '/article-create' => 'articleCreateController.php',
    '/article-update' => 'articleUpdateController.php',
    '/article-delete' => 'articleDeleteController.php',
    '/connect' => 'connectController.php',
];


if (array_key_exists($uri, $routes)) {

    require_once(__DIR__ . "/../app/Controllers/" . $routes[$uri]);
    
} else {
    http_response_code(404);
    require_once(__DIR__ . "/../app/Controllers/404.php");
};
