<?php

namespace Doc\Models;

class RootCategory implements Interfaces\Renderable
{
    /**
     * @var SubCategory[]
     */
    private $subCategories = [];
    private $directory;
    private $name;

    public function __construct($name, $directory, array $subCategories = [])
    {
        $this->name = $name;
        $this->directory = $directory;
        $this->subCategories = $subCategories;
        return $this;
    }

    public function render() : string
    {
        return "<h3>{$this->name}</h3>" .  $this->renderChildren();
    }

    protected function renderChildren() : string
    {
        $output = '';
        foreach ($this->subCategories as $subCategory) {
            $output .= $subCategory->render($this->directory);
        }
        return $output;
    }
}