<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken Teams</title>
</head>
<body>
<?php require_once "navbar.php" ?>

<h1>afdrukken Teams</h1>
<p>Dit zijn alle gegevens uit de Teamstabel.</p>
<?php
require_once 'databaseConn.php';
global $conn;
$Poules = $conn->prepare("
    select * from teams ");
$teams->execute();
$result = $teams->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row) {
    echo "TeamID: " . $row['TeamID'] . "<br>";
    echo "Naam: " . $row['Naam'] . "<br>";

}
?>
</body>
</html>