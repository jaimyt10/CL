<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>updatepoule</title>
</head>
<body>
<?php require_once "navbar.php" ;


    require_once "databaseConn.php";
    require_once "Poule.php";
    
    if (isset($_POST['PouleID'])) {
        // Haal het poule-ID op uit het formulier
        $PouleID = $_POST['PouleID'];
    
        // Maak een nieuw poule-object met het poule-ID
        $poule = new poule($PouleID, "");
    
        // Gebruik de getter-methoden om de huidige eigenschappen van de poule op te halen
        $PouleNaam = $poule->getPouleNaam();

    
        global $conn;
        $pouleen = $conn->prepare("
    select PouleID, PouleNaam
    from poule
    where PouleID = :PouleID
    ");
        $pouleen->execute(["PouleID" => $PouleID]);
    
        // poulegegevens in een nieuw formulier laten zien
        echo " <form class='form' action='update-Poule-Formulier3.php' method='post'>";
        foreach ($pouleen as $poule) {
            // PouleID mag niet gewijzigd worden
            echo "PouleID: <input type='text' ";
            echo "name='PouleID'";
            echo "value= '" . $poule["PouleID"] . " '";
            echo " readonly> <br />";
    
            echo "PouleNaam: <input type='text' ";
            echo "name='PouleNaam'";
            echo "value= '" . $poule["PouleNaam"] . "' ";
            echo " > <br />";

        }
        echo "<input type='submit' name='submit_button' value='Verzenden'>";
        echo "</form>";
        echo "</div>";
    
        exit();
    }
    ?>
    