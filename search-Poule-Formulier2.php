<?php
require_once "navbar.php" ;

require_once "databaseConn.php";
require "Poule.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $PouleID = $_POST["PouleID"];


    // Zoek het poule in de database

    global $conn;

    $stmt = $conn->prepare("SELECT * FROM poule WHERE PouleID = :PouleID");

    $stmt->bindParam(":PouleID", $PouleID);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);


// Toon de eigenschappen van het poule als het gevonden is

    if ($result) {

        $poule = new poule($result["PouleID"], $result["PouleNaam"]);

        echo "<table class='table table-dark table-hover'>";

        echo "<tr>";

        echo "<td>" . "ID: " . $result["PouleID"] .   "<br>" . "</td>";

        echo "<td>" . "Poule Naam: " . $result["PouleNaam"] . "</td>" . "<br>";
        echo "</tr>";
        echo "</table>";

    }
}
?>

