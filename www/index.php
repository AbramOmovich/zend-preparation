<?php
error_reporting(E_ALL);
use Doc\Models\MenuRenderer;

require 'vendor/autoload.php';



$mapSrc = include 'map.php';
$map = new MenuRenderer($mapSrc);

echo $map->render();