<?php
require 'Controllers/index.controller.php';

$path = $_SERVER['PATH_INFO'] ?? '/'; #makes the $path be the requested path

class route
{
    public static function getroutes(){
        match ($_SERVER['PATH_INFO'] ?? '/'){
          '/'           => controller::redirect("index"),
          '/about'      => controller::redirect("about"),
          '/projects'   => controller::redirect("projects"),
          '/contact'    => controller::redirect("contact"),
          default       => controller::redirect("404"),
        };
    }
}

