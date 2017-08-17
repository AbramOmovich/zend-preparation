<?php
error_reporting(E_ALL);

require 'vendor/autoload.php';

use Doc\Models\MenuRenderer;

$mapSrc = include 'map.php';
$map = new MenuRenderer($mapSrc);

echo $map->render();