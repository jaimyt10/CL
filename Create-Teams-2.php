<!doctype html>
<html>
<head>
    <title>Team aanmaken</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<h1>Create teams
    <?php
    require "Team.php";

//    var_dump($_POST);

    $TeamId = $_POST["TeamId"];
    $Naam = $_POST["Naam"];
    $Land = $_POST["Land"];
    $Competitie = $_POST["Competitie"];
    $Goals = $_POST["Goals"];

    $Team = new Teams($TeamId, $Naam, $Land, $Competitie, $Goals);
    $Team->Create();
    echo "Het volgende object is gemaakt: <br/>";

    ?>
</body>
</html>
