<?php

function emptyInput($name, $email, $password){
    $result = false;

    if( empty($name) || empty($email) || empty($password) ) $result = true;

    return $result;
}

function invalidUsername($name, $result = false){
    $result = false;

    if(!preg_match("/^[a-zA-Z0-9]*$/", $name)) $result = true;

    return $result;
}

function invalidEmail($email){
    $result = false;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $result = true;

    return $result;
}

function usernameExists($conn, $name, $email){
    $query = "SELECT * FROM users WHERE username = :username OR email = :useremail;";
    $stmt = $conn->prepare($query) or die ("prepare failed.");

    $stmt->bindParam(":username", $name, PDO::PARAM_STR, 128);
    $stmt->bindParam(":useremail", $email, PDO::PARAM_STR, 128);

    $stmt->execute() or die ('username exists failed');

    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        return $row;

    }
    else {
        return false;
    }

    $conn = null;
    $stmt = null;
}

function createUser($conn, $name, $email, $password){
    $query = "INSERT INTO users (username, email, password) VALUES (:username, :useremail, :pwd);";
    $stmt = $conn->prepare($query) or die ("prepare failed.");

    $hashedpwd = hash('sha512', $password);

    $stmt->bindParam(":username", $name, PDO::PARAM_STR, 128);
    $stmt->bindParam(":useremail", $email, PDO::PARAM_STR, 128);
    $stmt->bindParam(":pwd", $hashedpwd, PDO::PARAM_STR, 512);

    $stmt->execute() or die ('execution failed.');
    $conn = null;
    $stmt = null;

    header('location: ../');
}

function emptyInputLogin($username, $pwd){
    $result = false;

    if( empty($username) || empty($pwd) ) $result = true;

    return $result;
}

function loginUser($conn, $username, $pwd) {
    $userExists = usernameExists($conn, $username, $username);

    if ($userExists === false) {
        echo "user doesnt exist";
        exit();
    }

    $DBPwd = $userExists['password'];
    $hashedPwd = hash('sha512', $pwd);

    if ($hashedPwd == $DBPwd) $checkPwd = true;
    else $checkPwd = false;

    if ($checkPwd === false) {
        echo "false password";
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["username"] = $userExists["username"];

        header('location: ../');
        exit();
    }
}