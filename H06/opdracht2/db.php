<?php

$servername = "localhost";
$dbname = "loginpage";
$username = "root";

try {
    $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

