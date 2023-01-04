<?php

namespace src;

class Application
{
    private $controller;

    private function setApp()
    {
        $loadName = "src\controllers\\";
        $url = explode('/', @$_GET['url']);

        if ($url[0] == '')
            $loadName .= 'Home';

        $loadName .= ucfirst(strtolower($url[0]));
        $loadName .= 'Controller';

        if (!file_exists($loadName . '.php')) {
            include("views/pages/404.php");
            die();
        }

        $this->controller = new $loadName();
    }

    public function run()
    {
        $this->setApp();
        $this->controller->index();
    }
}
