<?php

class Router{

    private $routes = [];

    public function addRoute($method, $path, $controller, $action){
        $this->routes[$method][$path] = [
            'controller' => $controller,
            'action' => $action,
        ];
    }

    public function handleRequest(){
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $_SERVER['REQUEST_URI'];

        if (isset($this->routes[$method][$path])) {
            $route = $this->routes[$method][$path];
            $controller = new $route['controller'];
            $controller->{$route['action']}();
        }   else {
            echo '404';
        }
    }
}


class HomeController{
    public function index(){
        include '../index.php/';
    }
}

class AboutController{
    public function index(){
        include '../index.php/aboutme';
    }
}

class ProjectsController{
    public function index(){
        include '../index.php/projects';
    }
}