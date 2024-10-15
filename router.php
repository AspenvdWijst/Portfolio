<?php
class route{
    public static function getroutes(){
        match ($_SERVER['PATH_INFO'] ?? '/'){
            '/'           => controller::redirect("index"),
            '/about'      => controller::redirect("about"),
            '/projects'   => controller::redirect("projects"),
            '/downloads'  => controller::redirect("downloads"),
            '/contact'    => controller::redirect("contact"),
            default       => controller::redirect("404"),
        };
    }
}