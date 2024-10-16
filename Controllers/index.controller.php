<?php
class pagecontroller{
    public function homepage(): void{
        require "Views/index.view.php";
    }

    public function about(): void{
        require "Views/about.view.php";
    }

    public function projects(): void{
        require "Views/projects.view.php";
    }

    public function downloads(): void{
        require "Views/downloads.view.php";
    }

    public function contact(): void{
        require "Views/contact.view.php";
    }

    public function error(): void{
        require "Views/404.view.php";
    }
}