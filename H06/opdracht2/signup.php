<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once 'db.php';
    require_once 'functions.php';

    if (emptyInput($name, $email, $password) !== false) {
        echo "please try again";
        exit();
    }
    if (invalidUsername($name) !== false) {
        echo "please try again";
        exit();
    }
    if (invalidEmail($email) !== false) {
        echo "please try again";
        exit();
    }

    if (usernameExists($conn, $name, $email) !== false) {
        echo "please try again";
        exit();
    }

    createUser($conn, $name, $email, $password);

} else {
    echo "sign up succesfull";
    exit();
}
