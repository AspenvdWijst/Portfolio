<?php
require 'Controllers/index.controller.php';#calls the controller to show the router the class
require 'Views/layouts/header.php';#calls the header first so it's always on the top of the page
require 'database/connection.php';#establishes a connection with the database
require 'Controllers/contact.controller.php';
require 'router.php';#routes the page
require 'Views/layouts/footer.php';