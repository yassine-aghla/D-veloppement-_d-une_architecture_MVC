<?php

// Charger l'autoload de Composer (si utilisé)
// require_once __DIR__ . '/../vendor/autoload.php';
require realpath(__DIR__."/../vendor/autoload.php");
// Charger les fichiers de configuration
require_once __DIR__ . '/../App/config/config.php';

// $router = require_once __DIR__ . '/../App/config/routes.php';
use App\core\Router;

use App\Controllers\Front\HomeController;
use App\Controllers\Front\ArticleController;

$router = new Router();


// Exécuter le routeur

$router->addRoute('GET', '/', HomeController::class, 'index');
$router->addRoute('GET', '/article', ArticleController::class, 'show');
$router->addRoute('GET', '/insert-user', HomeController::class, 'createUser');
$router->addRoute('GET', '/insert-article', ArticleController::class, 'createArticle');
$router->addRoute('GET', '/admin/users', \App\Controllers\back\UserController::class, 'listUsers');
// $router->addRoute('GET', 'admin/dashboard', 'Back\DashboardController', 'index');
// $router->addRoute('GET', 'admin/users', 'Back\UserController', 'listUsers');
// $router->addRoute('GET', 'test', 'Front\HomeController', 'index');

// return $router;
 $router->dispatch();
