<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken Poules</title>
</head>
<body>
<?php require_once "navbar.php" ?>

<h1>afdrukken Poules</h1>
<p>Dit zijn alle gegevens uit de Poulestabel.</p>
<?php
require_once 'databaseConn.php';
global $conn;
$Poules = $conn->prepare("
    select * from poule ");
$Poules->execute();
$result = $Poules->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row) {
    echo "PouleID: " . $row['PouleID'] . "<br>";
    echo "Poule Naam: " . $row['PouleNaam'] . "<br>";

}
?>
</body>
</html>