<?php

class Connection{
    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "!cc8Z1w8iLAs66ipH";
        $dbname = "profileapp";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                } catch(PDOException $e) {
            echo "database error" . $e->getMessage();
        }
    }
}