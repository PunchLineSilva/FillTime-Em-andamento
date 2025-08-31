<?php

namespace Source\Web;

class App extends Controller
{
    public function __construct()
    {
        parent::__construct("app");
    }

    public function home (array $data): void
    {
        echo $this->view->render("home", []);
        //echo "Olá, App!";
    }
}