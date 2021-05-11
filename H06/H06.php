<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>H06</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
<?php
$servername = "localhost";
$dbname = "phpschool";
$username = "root";

try {
    $conn = new PDO("mysql:host={$servername};dbname={$dbname}", $username);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query) or die ("Error 1.");
$stmt->execute() or die ('Error 2.');

while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" .$row['cursistnr'] . "</td>";
    echo "<td>" .$row['naam'] . "</td>";
    echo "<td>" .$row['roepnaam'] . "</td>";
    echo "<td>" .$row['straat'] . "</td>";
    echo "<td>" .$row['postcode'] . "</td>";
    echo "<td>" .$row['plaats'] . "</td>";
    echo "<td>" .$row['geslacht'] . "</td>";
    echo "<td>" .$row['geb_datum'] . "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>