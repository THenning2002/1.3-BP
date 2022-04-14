<?php

require('database.php');

$query = $pdo->query("SELECT * FROM kooi WHERE hoeveel Like '%leeg%'");

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
    <a href="Toeveogenn.php">Toevoegen</a>
    <a href="Dier.php">Dieren</a>
    <a class="active" href="active" href="kooi.php">Kooien</a>
    </div>

    <div class="tekst">
        <h1> Legen kooien </h1>
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

<a href="kooi.php">Overzicht</a>



</body>

</html>