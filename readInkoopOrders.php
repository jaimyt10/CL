<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken Poule</title>
</head>
<body>
<?php require_once "navbar.php" ?>

<h1>afdrukken Poule</h1>
<p>Dit zijn alle gegevens uit de pouletabel.</p>`r
<?php
require "Poule.php";			// nodig om object te maken
$PouleID = new poule();
$PouleID->readArt();
?>
<a href="index.php"><br/>Terug naar het hoofdmenu</a>
</body>
</html>