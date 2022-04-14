<?php

require('database.php');

$query = $pdo->query("SELECT * FROM dier, kooi, plaatsing WHERE dier.did = plaatsing.did AND kooi.kid = plaatsing.kid ORDER BY dier.soort ASC");

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
    <a href="Dier.php">Dieren</a>
    <a class="active" href="kooi.php">Kooien</a>
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
        <th>Datum</th>
        <th>Kooi</th>
    </tr>

    <!-- While loop die door alle opgehaalde rijen van de tabel taak gaat -->
    <?php while ($row = $query->fetch()) { ?>

    <!-- Alle data van de opgehaalde rij in table row stoppen -->
    
    <?php echo '<tr>' ?>
        <td><?php echo $row['did']; ?></td>
        <td><?php echo $row['soort']; ?></td>
        <td><?php echo $row['naam']; ?></td>
        <td><?php echo $row['gedrag']; ?></td>
        <td><?php echo $row['datum']; ?></td>
        <td><?php echo $row['Knaam']; ?></td>
    <?php echo '</tr>' ?>

    <?php } ?>
</table>

<a href="toevoegen.php">Toevoegen</a>
<a href="search.php">Op zoeken</a>
<a href="diersoort.php">Zoek op soort</a>




</body>

</html>