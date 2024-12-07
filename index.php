<?php 
require_once __DIR__.'/vendor/autoload.php';
 //phpinfo();

 //dd(['Bay! Я работаю!']);
 $routes = require_once __DIR__.'/config/routes.php';

 //dd($routes);
// dd($_SERVER);

 $uri = $_SERVER['REQUEST_URI'];
 //dd($routes[$uri]);
 $routes[$uri]();

?>