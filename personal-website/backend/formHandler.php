<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name=htmlspecialchars($_POST["name"]);
    $age=htmlspecialchars($_POST["age"]);
    $favorite_color=htmlspecialchars($_POST["favorite-color"]);
    if (empty($name) or empty($age) or empty($favorite_color)) {
        #alert("Please fill in all the data");
        header("Location: ../form.html");
        exit();
    }
    $random_array=[
        "blue"=>"me",
        "red"=>"you"
    ];

    echo "echo broken <br>";
    echo "name: ";
    echo $name;
    echo "tasks " . $random_array["blue"];
    //header("Location: ../form.html");
} else {
    header("Location: ../dontbeMean.html");
}