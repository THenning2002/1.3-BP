<?php

require('database.php');

$query = $pdo->query("SELECT * FROM `kooi`");

?>


<!DOCTYPE html>
<html>

<head>
    <title>Kooi</title>
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
        <h1>  </h1>
    </div>

<!-- Tabel aanmaken in HTML -->
<table id="kooi"> 
    <tr>
        <th>kid</th>
        <th>Naam</th>
        <th>Hoeveel</th>
    </tr>

    <!-- While loop die door alle opgehaalde rijen van de tabel taak gaat -->
    <?php while ($row = $query->fetch()) { ?>

    <!-- Alle data van de opgehaalde rij in table row stoppen -->
    <?php echo '<tr>' ?>
        <td><?php echo $row['kid']; ?></td>
        <td><?php echo $row['Knaam']; ?></td>
        <td><?php echo $row['hoeveel']; ?></td>
    <?php echo '</tr>' ?>

    <?php } ?>
</table>

<a href="toevoegenK.php">Toevoegen</a>
<a href="searchK.php">Op zoeken</a>
<a href="Leeg.php">Legen Kooien</a>


</body>

</html>