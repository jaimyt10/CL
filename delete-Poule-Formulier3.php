<!doctype html>
<html>
<!-- Mouadh  -->
<head>
    <title>delete Poule</title>
</head>
<body>
<?php require_once "navbar.php" ?>

<h1>delete Poule</h1>

<?php

// Mouadh 
require "Poule.php";                    // nodig om object te maken
$PouleID = $_POST["PouleID"];    // uitlezen vakje van deletePoule1
$dell_inkOrd = new poule();




$dell_inkOrd->Delete($PouleID);




?>


