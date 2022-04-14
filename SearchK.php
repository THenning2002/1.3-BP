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
    <a href="Dier.php">Dieren</a>
    <a class="active" href="kooi.php">Kooien</a>
    </div>
    
    <div class="search">
    <h1>Op Zoeken</h1>
    <form method="POST">
    <input id="search" name="txtsearch" type="text" placeholder="Zoek Op">
    <input id="submit" name="search" type="submit" value="search">
    </form>
    

    <?php 
    
    $query = "SELECT * FROM kooi";

    if(isset($_POST['search'])){
        $search = $_POST['txtsearch'];
        $query = "SELECT * FROM kooi WHERE Knaam Like '%$search%'";
    }

    $stm = $pdo->prepare($query);
    if ($stm-> execute()){
        $result = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $row){
            echo "Naam:$row->Knaam </br>".
                 "Hoeveel: $row->hoeveel</br>".
                 "<a href='wijzigK.php?kid=$row->kid'>Wijzigen</a> <br/></br>";
        }
    }
    
    ?>
        <a href="kooi.php">Overzicht</a>
    </div>





</body>

</html>