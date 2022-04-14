<?php

require('database.php');

// Query maken om alle rijen uit de tabel taak op te halen
$query = $pdo->query("SELECT * FROM `dier` ORDER BY `dier`.`naam` ASC");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Toevoegen</title>
    <link rel="stylesheet" href="mijnstyle.css"/>

</head>

<body>
    <div class="topnav">
    <a class="active" href="home.php">Home</a>
    <a href="Toevoegenn.php">Toevoegen</a>
    <a href="Dier.php">Dieren</a>
    <a href="#Kooien">Kooien</a>
    </div>

    <div class="toevoegen">
    <form method = "POST">
        <h1> Toevoegen </h1>
        <label for="soort"> Soort:</label>
        <input type="text" name="soort" id="soort" placeholder="Soort"/>
        <br/> 
        <label for="naam"> Naam:</label>
        <input type="text" name="naam" id="naam" placeholder="Naam"/>
        <br/> 
        <label for="gedrag"> Gedrag:</label>
        <input type="text" name="gedrag" id="gedrag" placeholder="Gedrag"/>
        <br/> 
        <input type="submit" name="btnVerstuur" value="Verstuur" />
        </form>
        <a href="dier.php">Overzicht</a>
    </div>

    <?php
    if (isset($_POST["btnVerstuur"])){
        $soort = $_POST["soort"];
        $naam = $_POST["naam"];
        $gedrag = $_POST["gedrag"];

        $query = "INSERT INTO dier (soort,naam,gedrag ) VALUES"."('$soort','$naam','$gedrag')";
        $stm = $pdo->prepare($query);
        if($stm->execute())
        {
            echo"statment correct";
            echo "<br/>";
        }
        
        else { echo "query mislukt";
        }
    }
    ?>

    





</body>

</html>