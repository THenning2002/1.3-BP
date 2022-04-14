<?php

require('database.php');

?>

<!DOCTYPE html>
<html>

<head>
    <title>Toevoegen</title>
    <link rel="stylesheet" href="mijnstyle.css"/>

</head>

<body>
    <div class="topnav">
    <a href="home.php">Home</a>
    <a href="Toevoegenn.php">Toevoegen</a>
    <a href="Dier.php">Dieren</a>
    <a class="active" href="kooi.php">Kooien</a>
    </div>

    <div class="toevoegen">
    <form method = "POST">
        <h1> Toevoegen </h1>
        <label for="Knaam"> Kooin naam:</label>
        <input type="text" name="Knaam" id="Knaam" placeholder="Kooi naam"/>
        <br/> 
        <label for="hoeveel"> Hoeveel:</label>
        <input type="text" name="hoeveel" id="hoeveel" placeholder="Hoeveel"/>
        <br/> 
        <input type="submit" name="btnVerstuur" value="Verstuur" />
        </form>
        <a href="kooi.php">Overzicht</a>
    </div>

    <?php
    if (isset($_POST["btnVerstuur"])){
        $Knaam = $_POST["Knaam"];
        $hoeveel = $_POST["hoeveel"];

        $query = "INSERT INTO kooi (Knaam,hoeveel) VALUES"."('$Knaam','$hoeveel')";
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