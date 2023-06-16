<!doctype html>
<html>
<!-- Anjo Eijeriks -->
<head>
    <title>delete team</title>
    <link rel="stylesheet">
</head>
<body>
<h1>delete team</h1>

<?php

// Anjo Eijeriks
require "Team.php";                    // nodig om object te maken
$artId = $_POST["TeamID"];    // uitlezen vakje van deleteStudentForm1
$dell_art = new Teams();




$dell_art->Delete($TeamID);




?>