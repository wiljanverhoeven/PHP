<?php
session_start();
if (isset($_SESSION["userid"])) {
    header("index.php");
}
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

<a href="index.php">Go back</a>
<br>
<form action="login.php" method="POST">
    username/email: <input type="text" name="uid" value="">
    wachtwoord: <input type="password" name="password" value="">
    <button type="submit" name="submit">verstuur</button>
</form>
<br>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput")     echo "missing arguments";
    if ($_GET["error"] == "wronglogin")     echo "username/email is incorrect";
    if ($_GET["error"] == "wrongpwd")       echo "password is incorrect";
}
?>

</body>
</html>
