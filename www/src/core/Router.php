<?php
namespace Doc\Core;

class Router
{
    protected $page;

    public function __construct($page)
    {
        $this->page = $page;
    }

    public function render()
    {
        $fullPath = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . $this->page . '.php';
        if(file_exists($fullPath)) return include $fullPath;
        else throw new \Exception('File not exists');
    }
}