<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>H04</title>
    <style>
    </style>
</head>
<body>
<?php

function convert($celcius) {
    $fahrenheit=$celcius*9/5+32;
    echo $fahrenheit;
}

convert(10);

echo "<br>";

function divide($getal) {
    if ($getal % 3 == 0) {
        echo "deelbaar door 3";
    } else {
        echo "niet deelbaar door 3";
    }
}

divide(4);

echo "<br>";

function reverse($string) {
    $newstring = strrev($string);
    echo $newstring;
}

reverse("nani");

?>
</body>
</html>