<?php


use Yanntyb\App\Controller\ArticleController;
use Yanntyb\App\Controller\UserController;
use RedBeanPHP\R;
use Yanntyb\Populate\Model\Classes\Populate;
use Yanntyb\Router\Model\Classes\Route;
use Yanntyb\Router\Model\Classes\Router;

require "../vendor/autoload.php";

Populate::setup("admin","root","");

$router = new Router(new Route("users", "/",[UserController::class,"showPage"]));

/**
 * Article Management
 */
$router->addRoute("articles","/article",[ArticleController::class, "showPage"]);
$router->addRoute("populate Article", "/article/populate", [ArticleController::class, "populate"]);
$router->addRoute("info Article","/article/info/{id}", [ArticleController::class, "info"]);
$router->addRoute("delete Article","/article/delete/{id}",[ArticleController::class, "delete"]);
$router->addRoute("edit Article","/article/edit/{id}", [ArticleController::class, "edit"]);
$router->addRoute("submit Edit Article","/article/submit", [ArticleController::class, "update"]);

/**
 * User Management
 */
$router->addRoute("populate User", "/user/populate",[UserController::class, "populate"]);
$router->addRoute("info User", "/user/info/{id}", [UserController::class, "info"]);
$router->addRoute("delete User", "/user/delete/{id}", [UserController::class, "delete"]);
$router->addRoute("edit User", "/user/edit/{id}", [UserController::class, "edit"]);
$router->addRoute("submit Edit User", "/user/submit", [UserController::class, "update"]);

$query = str_replace("/index.php","",$_SERVER['PHP_SELF']);
$router->handleQuery($query);


