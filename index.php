<?php
switch (uri) {
    case '/aboutme':
        require('Views/aboutme.view.php');
        break;

    case '/myprojects':
        require('Views/myprojects.view.php');
        break;

    case '/downloads':
        require('Views/downloads.view.php');
        break;

    case '/contact':
        require('Views/contact.view.php');
        break;

    default:
        require('Views/index.view.php');
        break;
}
