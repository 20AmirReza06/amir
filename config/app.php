<?php
define('App_Name' , 'top');
define('base_url' , "https://$_SERVER[HTTP_HOST]:8000");
define("BASE_DIR" , realpath(__DIR__  . '/../'));

$current_rout = explode('?',$_SERVER['REQUEST_URI'])[0];
$current_rout = substr($current_rout , 1);
define("CURRENT_ROUT" , "$current_rout");

global $routes;
$routes = [
    'get'=>[],
    'post'=>[],
    'put'=>[],
    'delete'=>[]
];