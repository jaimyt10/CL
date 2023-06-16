
<?php

require_once "DatabaseConnectie.php";


?>


<!doctype html>
<html>
<head>
    <title>Create Teams</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<h1>create teams</h1>
<form action="Create-Teams-2.php" method="post">

   <!-- <label for="TeamId">TeamId:</label>
    <input type="text" id = "TeamId" name="TeamId"><br/>
-->

    <label for="Naam">Naam</label>
    <input type="text" id = "Naam" name="Naam"><br/>

    <label for="Land">Land:</label>
    <input type="text" id = "Land" name="Land"><br/>

    <label for="Competitie">Competitie:</label>
    <input type="text" id = "Competitie" name="Competitie"><br/>

    <label for="Goals">Goals</label>
    <input type="text" id = "Goals" name="Goals"><br/>

    <input type="submit">
</form>
</body>
</html>