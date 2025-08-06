<?php
function get_username(object $pdo, string $username) {
    $query="SELECT username FROM users WHERE username=?;";
    $statement=$pdo->prepare($query);
    $statement->execute($username);
    $response=$statement->fetch(PDO::ASSOC);
    return $response;
}