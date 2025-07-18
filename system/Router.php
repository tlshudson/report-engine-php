<?php

class Router
{
    private $controller;
    private $method;
    private $params = [];

    public function __construct($url)
    {
        $url = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));
        $this->controller = ucfirst($url[0]) . 'Controller';
        $this->method = $url[1] ?? 'index';
        unset($url[0], $url[1]);
        $this->params = array_values($url);
    }

    public function run()
    {
        $controllerPath = "../app/controllers/{$this->controller}.php";
        if (!file_exists($controllerPath)) {
            http_response_code(404);
            echo "Controller not Found";
            return;
        }

        require_once $controllerPath;
        if (!class_exists($this->controller)) {
            http_response_code(500);
            echo "Controller class not found";
            return;
        }

        $controller = new $this->controller();
        if (!method_exists($controller, $this->method)) {
            http_response_code(500);
            echo "Method not found";
            return;
        }
        call_user_func_array([$controller, $this->method], $this->params);
    }
}
