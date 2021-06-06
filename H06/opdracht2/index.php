<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    if(isset($_SESSION['username'])) {
        echo '<a href="logout.php">log out</a>';
    }
    else {
        echo '<a href="signupindex.php">sign up</a> ';
        echo '<a href="loginindex.php">login</a>';
    }
?>

</body>
</html>