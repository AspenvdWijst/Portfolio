<?php
$servername = "localhost";
$username = "root";
$password = "!cc8Z1w8iLAs66ipH";
$dbname = "portfolio";
$conn = "null";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "database error" . $e->getMessage();
}