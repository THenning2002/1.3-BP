<?php

require('database.php');

?>

<!DOCTYPE html>
<html>

<head>
    <title>Search</title>
    <link rel="stylesheet" href="mijnstyle.css"/>

</head>

<body>
    <div class="topnav">
    <a href="home.php">Home</a>
    <a href="Toevoegenn.php">Toevoegen</a>
    <a class="active" href="Dier.php">Dieren</a>
    <a href="kooi.php">Kooien</a>
    </div>
    
    <div class="search">
    <h1>Op Zoeken</h1>
    <form method="POST">
    <input id="search" name="txtsearch" type="text" placeholder="Zoek Op Soort">
    <input id="submit" name="search" type="submit" value="search">
    </form>
    

    <?php 
    
    $query = "SELECT * FROM dier";

    if(isset($_POST['search'])){
        $search = $_POST['txtsearch'];
        $query = "SELECT * FROM dier WHERE soort Like '%$search%'";
    }

    $stm = $pdo->prepare($query);
    if ($stm-> execute()){
        $result = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $row){
            echo "Naam:$row->naam </br>".
                 "Soort: $row->soort</br>".
                 "Gedrag: $row->gedrag</br> </br>";
        }
    }
    
    ?>
    <a href="dier.php">Overzicht</a>
    </div>





</body>

</html>