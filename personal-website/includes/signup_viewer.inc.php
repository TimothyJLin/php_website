<?php
function check_if_signup_errors() {
    if ($_SESSION["errors-signup"]) {
        $errors=$_SESSION["errors-signup"];
        foreach ($error in $errors) {
                echo '<p> ' . $error . ' </p>';
                echo
        }
        unset($_SESSION["errors-signup"]);
    }
}