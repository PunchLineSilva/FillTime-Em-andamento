<?php

namespace Source\Web;

use League\Plates\Engine;

class Controller
{
    protected $view;

    public function __construct($path)
    {
        $this->view = new Engine(__DIR__ . "/../../views/" . $path, "php");
    }
}