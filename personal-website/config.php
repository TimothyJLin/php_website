<?php
ini_set('session.use.only.cookies', 1);
ini_set('session.use_strict_mode', 1);
session_set_cookie_params([
    'lifetime'=>3000,
    'domain'=>'localhost',
    'path'=>'/',
    'secure'=>true,
    'httponly'=>true
]);
session_start();
session_regenerate_id(true);