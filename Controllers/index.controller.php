<?php

class controller{
    public static function redirect($path){
            return require("./Views/$path.view.php");
    }
}