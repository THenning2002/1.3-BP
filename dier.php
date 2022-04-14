<?php

require('database.php');

$query = $pdo->query("SELECT * FROM `dier` ORDER BY `dier`.`soort` ASC");

?>


<!DOCTYPE html>
<html>

<head>
    <title>dieren</title>
    <link rel="stylesheet" href="dieren.css"/>

</head>

<body>

<div class="topnav">
    <a href="home.php">Home</a>
    <a href="Toevoegenn.php">Toevoegen</a>
    <a class="active" href="Dier.php">Dieren</a>
    <a href="kooi.php">Kooien</a>
    </div>

    <div class="tekst">
        <h1> Dieren </h1>
    </div>

<!-- Tabel aanmaken in HTML -->
<table id="dier"> 
    <tr>
        <th>did</th>
        <th>Soort</th> 
        <th>Naam</th>
        <th>Gedrag</th>
    </tr>

    <!-- While loop die door alle opgehaalde rijen van de tabel taak gaat -->
    <?php while ($row = $query->fetch()) { ?>

    <!-- Alle data van de opgehaalde rij in table row stoppen -->
    
    <?php echo '<tr>' ?>
        <td><?php echo $row['did']; ?></td>
        <td><?php echo $row['soort']; ?></td>
        <td><?php echo $row['naam']; ?></td>
        <td><?php echo $row['gedrag']; ?></td>
    <?php echo '</tr>' ?>

    <?php } ?>
</table>

<a href="toevoegen.php">Toevoegen</a>
<a href="search.php">Op zoeken</a>
<a href="diersoort.php">Zoek op soort</a>




</body>

</html>