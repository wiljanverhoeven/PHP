<?php

if($_POST['voornaam'] == "") {
    echo "voornaam missing ";
    echo "<a href=\"formulier.html\">terug naar het formulier</a>";
} else {
    echo $_POST['voornaam'];
}

if($_POST['adres'] == "") {
    echo "adres missing ";
    echo "<a href=\"formulier.html\">terug naar het formulier</a>";
} else {
    echo $_POST['adres'];
}

if($_POST['email'] == "") {
    echo "email missing ";
    echo "<a href=\"formulier.html\">terug naar het formulier</a>";
} else {
    echo $_POST['email'];
}

if($_POST['wachtwoord'] == "") {
    echo "wachtwoord missing ";
    echo "<a href=\"formulier.html\">terug naar het formulier</a>";
}