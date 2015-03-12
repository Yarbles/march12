<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();

    $app->get("/", function() use ($app) {
        return "Home";
    });


    return $app;



?>
