<?php
$dsn="mysql:host=localhost;dbname=accounts";
$db_username="root";
$db_password="";

try {
    $pdo = new PDO($dsn, $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Failed to connect: " . $e.getMessage();
}

