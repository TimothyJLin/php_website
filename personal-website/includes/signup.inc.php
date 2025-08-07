<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $username=$_POST["username"];
    $password=$_POST["password"];
    require_once "signup_controller.inc.php";
    if (has_empty_fields($username, $password)) {
        header("Location: ./../html/createAccount.html");
        die();  
    }
    try {
        $errors = [];
        if (has_empty_fields($username, $password)) {
            $errors["empty_input"]="empty field";
        }
        if (ise_username_taken($username)) {
            $errors["username_taken"]="username has already been taken, please choose another one";
        } if ($errors) {
            $_SESSION["errors-signup"]=$errors;
            header("Location: ./../html/createAccount.html");
        }
        require_once "dbh.inc.php";
        require_once "hashpassword.inc.php";
        $query="INSERT INTO users (username, pwd) VALUES (?, ?);";

        //prepared statements prevent SQL injection
        $hashed_password=hash_password($password);
        var_dump($hashed_password);
        $statement=$pdo->prepare($query);
        
        $statement->execute([$username, $hashed_password]);

        $pdo=NULL;
        $statement=NULL;
        header("Location: ./../html/createAccount.html");
        die();

    } catch(PDOException $e) {
        die("sign up failed: " . $e->getMessage());
    }


} else {
    header("Location: ./../createAccount.html");
}    

