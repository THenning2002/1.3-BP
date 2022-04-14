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
    <a class="active" href="Toevoegenn.php">Toevoegen</a>
    <a href="Dier.php">Dieren</a>
    <a href="kooi.php">Kooien</a>
    </div>

    <div class="toevoegen">
    <form method = "POST">
        <h1> Toevoegen </h1>
        <label for="did"> did:</label>
       <select name="cmbDier">
           <?php
            $query = "SELECT * FROM dier";
            $stm = $pdo->prepare($query);
            if($stm->execute()){
                $result=$stm->fetchAll(PDO::FETCH_OBJ);
                foreach($result as $dier){
                    echo"<option value='".$dier->did."'> $dier->naam </option>";
                }
            }
           ?>
       </select>
        <br/> 
        <label for="kid"> kid:</label>
        <select name="cmbkooi">
           <?php
            $query = "SELECT * FROM kooi";
            $stm = $pdo->prepare($query);
            if($stm->execute()){
                $result=$stm->fetchAll(PDO::FETCH_OBJ);
                foreach($result as $kooi){
                    echo"<option value='".$kooi->kid."'> $kooi->Knaam </option>";
                }
            }
           ?>
       </select>
        <br/> 
        <label for="datum"> Datum:</label>
        <input type="DATE" name="datum" id="datum" placeholder="datum"/>
        <br/> 
        <input type="submit" name="btnVerstuur" value="Verstuur" />
        </form>
        <a href="dier3.php">Overzicht</a>
    </div>

    <?php
    if (isset($_POST["btnVerstuur"])){
        $did = $_POST["cmbDier"];
        $kid = $_POST["cmbkooi"];
        $datum = $_POST["datum"];

        $query = "INSERT INTO plaatsing (did,kid,datum ) VALUES"."('$did','$kid','$datum')";
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