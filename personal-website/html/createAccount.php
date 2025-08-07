<?php
require_once './../includes/signup_viewer.inc.php';
require_once './../includes/signup_viewer.php';
<html>
    <head>

    </head>
    <body>
        <form action="./../includes/signup.inc.php" method="POST">
            <input value="username" placeholder="Username">
            <br>
            <input value="password" placeholder="Password"> 
            <br>
            <button>Sign up</button>
        </form>
        <?php 
            check_if_signup_errors();
        ?>
    </body>
</html>