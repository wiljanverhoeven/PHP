<?php
session_start();
if (isset($_SESSION["userid"])) {
    header("location: ../../opdracht2/");
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
<form action="signup.php" method="POST">
    username: <input type="text" name="name" value="">
    email: <input type="email" name="email" value="">
    password: <input type="password" name="password" value="">
    <button type="submit" name="submit">submit</button>
</form>
<br>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput")     echo "missing arguments";
    if ($_GET["error"] == "invalidname")    echo "invalid username";
    if ($_GET["error"] == "invalidemail")   echo "invalid email";
    if ($_GET["error"] == "userexists")     echo "this username/email already exists";
    if ($_GET["error"] == "none")           echo "you have signed up!";
}
?>

</body>
</html>
