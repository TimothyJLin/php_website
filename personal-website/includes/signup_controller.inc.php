<?php
function has_empty_fields(string $username, string $password) {
    if (empty($username) or empty($password)) {
        return true;
    } else {
        return false;
    }
}
function is_email_valid(string $email) {

}
function is_username_taken(object $pdo, string $username) {
    if (get_username($pdo,  $username)) {
        return true;
    } else {
        return false;
    }
}

function create_account($username, $password) {
    
}