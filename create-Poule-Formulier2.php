<!doctype html>
<html>
<head>
    <title>Create Poule</title>
</head>
<body>
<?php require_once "navbar.php" ?>

<h1>Create Poule</h1>

<?php
require "Poule.php";

$PouleNaam=$_POST["PouleNaam"];


$poule = new poule( $PouleNaam);
$poule->Create();
echo "Het volgende object is gemaakt: <br/>";

?>
</body>
</html>
