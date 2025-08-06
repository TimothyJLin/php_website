<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (htmlspecialchars($_POST["username"])=="test" and htmlspecialchars($_POST["password"]=="pass")) {
        header("Location: ../flag1.html");
        exit();
    } else {
        echo "sorry, wrong username or password";
    }
} else {
    header("Location: ../admin.html");
}