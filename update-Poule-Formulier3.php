<!doctype html>
<html>
	<!-- Anjo Eijeriks -->
	<head>
		<title>update Poule formulier 3</title>
	</head>
	<body>
    <?php require_once "navbar.php" ?>

    <h1>update Poule formulier 3</h1>
		
		<?php
        require "Poule.php";

            // gegevens uit de array in variabelen stoppen
            $PouleID = $_POST["PouleID"];
			$PouleNaam = $_POST["PouleNaam"];


            // maken object ---------------------------------------------------
			$Poule1 = new poule($PouleID, $PouleNaam); // maakt object

			$query = $conn->prepare("UPDATE poule SET PouleNaam=:PouleNaam   WHERE PouleID=:PouleID");
                        $query->execute([
                                "PouleID" => $PouleID,
            "PouleNaam" => $PouleNaam


            ]);




        	           // vervangt de tabelgegevens voor objectgegevens
			//$Poule1->afdrukkenPoule();	                       // drukt object af
        echo "Poule succesvol geupdated!";

		?>
	</body>
</html>
