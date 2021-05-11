<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>H03</title>
    <style>
        body {
            text-align: center;
        }
        .rood {
            border: red solid 5px;
        }
        .groen {
            border: green solid 5px;
        }
    </style>
</head>
<body>
<?php

for($row = 1; $row <= 10;$row++) {
    echo "<img src='images/simba".$row.".jpg' alt='kat' width='300' height='300'>";
}

echo "<br>";

for($row2 = 0; $row2 <= 9; $row2++) {
    for($row3 = 0; $row3 < $row2; $row3++) {
        echo "*";
    }

    echo "*<br>";
}

echo "<br>";

$x = 35;

for($x = 25; $x < 35; $x++) {
    echo "hoppelepee";
}
echo "<br>";

for($e = 1; $e <= 9; $e++) {
    if($e %2 == 0) {
    $class = "class='rood'";
} else {
    $class = "class='groen'";
}
echo "<img ".$class. "src='images/simba".$e.".jpg' alt='kat' width='300' height='300'>";
}

echo "<br>";

$leeftijd = 2;
$bedrag = 10;
if($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}

if($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}

if($leeftijd < 3) {
    $bedrag = 0;
}
echo $bedrag;

echo "<br>";


?>
</body>
</html>

