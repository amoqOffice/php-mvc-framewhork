<?php
    require_once 'vendor/autoload.php';
    require_once 'controllers/HomeController.php';

    $router = new Aven\Router($_SERVER['REQUEST_URI']);
    
    // Liste des routes
    $router->get('/', "HomeController@index");

    $router->init(); // initialize router


    // route doc: https://github.com/lotfio/aven