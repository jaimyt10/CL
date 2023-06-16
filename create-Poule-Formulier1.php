<?php

require_once "databaseConn.php";


?>


<!doctype html>
<html>
<head>
    <title>Create Poule</title>
</head>
<body>
<?php require_once "navbar.php" ?>

<h1>create Poule</h1>
<form action="create-Poule-Formulier2.php" method="post">
    <label for="PouleNaam">PouleNaam:</label>
    <input type="text" id = "PouleNaam" name="PouleNaam"><br/>

    <input type="submit">
</form>
</body>
</html>