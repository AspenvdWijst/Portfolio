<?php
$path = $_SERVER['PATH_INFO'] ?? '/';

switch ($path) {
    case '/':
        $home = new pagecontroller();
        $home->homepage();
        break;

    case '/about':
        $about = new pagecontroller();
        $about->about();
        break;

    case '/projects':
        $projects = new pagecontroller();
        $projects->projects();
        break;

    case '/downloads':
        $downloads = new pagecontroller();
        $downloads->downloads();
        break;

    case '/contact':
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $contactcontroller = new ContactController($conn);
            $contactcontroller->makepost();
        }
        $contact = new pagecontroller();
        $contact->contact();
        break;

    default:
        $error = new pagecontroller();
        $error->error();
        break;
}