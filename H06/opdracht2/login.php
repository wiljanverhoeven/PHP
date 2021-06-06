<?php

require_once 'db.php';
require_once 'functions.php';

if (isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["password"];

    if (emptyInputLogin($username, $pwd) !== false) {
        echo "please try again";
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else {
    echo "welcome";
    exit();
}
