<?php
error_reporting(E_ALL);

use Doc\Core\Router;
use Doc\Models\MenuRenderer;

require 'vendor/autoload.php';

    if (ltrim($_SERVER['REQUEST_URI'], '/')){
        $router = new Router($_SERVER['REQUEST_URI']);
        $router->render();
    }else{
        $map = new MenuRenderer(include 'map.php');
        echo $map->render();
    }