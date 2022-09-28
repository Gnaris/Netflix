<?php
include "entity/Router.php";
include "controllers/PostController.php";

require "views/elements/header.php";

if(!isset($_GET["url"]))
{
    $_GET["url"] = "connexion";
}

$router = new Router($_GET["url"]);

$router->register("connexion", function(){
    include "views/connexion.php";
});
$router->register("connexion/request", function(){
    $users = new PostController();
    $users->connect($_POST["username"], $_POST["password"]);
    header("Location: /troll");
});
$router->register("troll", function(){
    include "views/troll.php";
});
?>