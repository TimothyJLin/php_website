<?php
function hash_password(string $password) {
    $bcrypt_cost=[    
        'cost'=>10,
    ];
    //password_hash automatically salts the password
    $hashed_output=password_hash($password, PASSWORD_BCRYPT, $bcrypt_cost);
    return $hashed_output;
}