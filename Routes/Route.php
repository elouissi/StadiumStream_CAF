<?php

namespace MVC\Routes;

class Route
{
    private string $controller = 'MVC\Controllers\HomeController';
    private string $method = 'index';
    private array $params = array();

    public function __construct()
    {
        $this->Sender();
    }

    public function Sender():void
    {
        $uri= $_SERVER['REQUEST_URI'] ?? '';
        $uri = explode('/', trim(strtolower($uri), '/'));

        if (!empty($uri[1])) {
            //exm ==> $uri[1]=Home and controller ===> homeController pour send lien in controller
            $controller = $uri[1] . 'controller';

            unset($uri[1]);
            $controller = "MVC\Controllers\\" . $controller;
            if (class_exists($controller)) {
                $this->controller = $controller;
            } else {
                include '../resources/views/error404.php';
                exit;
            }
        }

        $class = $this->controller;
        $objetController = new $class;

        if (isset($uri[2])) {

            $method = $uri[2];
            unset($uri[2]);

            if (method_exists($objetController, $method)) {
                $this->method = $method;
            } else {
                include '../resources/views/error404.php';
                // echo "error not fined";
                exit;
            }
        }

        if (isset($uri[3])) {
            $this->params = array_values(array_slice($uri, 1));
        }

        call_user_func_array([$objetController, $this->method], $this->params);

    }
}