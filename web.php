<?php
    require_once 'vendor/autoload.php';
    require_once 'controllers/TestController.php';

    // here we are using $_SERVER['REQUEST_URI']
    // you can use $_GET['uri']
    $router = new Aven\Router($_SERVER['REQUEST_URI']);

    $router->get('/', function(){  // with a callback
        return "welcome from aven";
    });

    $router->get('/hola/(:str)', "TestController@create"); // controller method

    $router->init(); // initialize router


    // route : https://github.com/lotfio/aven