<?php

require ("database.php");


if(isset($_GET['did'])){
    $did = $_GET['did'];

    $sql = "SELECT * FROM `dier` WHERE `did` = $did";
    $stm = $pdo->prepare($sql);
    if ($stm->execute()) {
        $data = $stm->fetch(PDO::FETCH_OBJ);

?>



        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <form method="POST">
                <label for="ID">ID: <?php echo $did;?> </label>
            </br>
                <label for="gedrag">gedrag: </label>
                <input id="gedrag" type="text" name="gedrag" value="<?php echo $data->gedrag?>">
                </br>
                <input type="submit" name="BtnWijzigen" value="wijzigen">
            </form>
            <a href="dier3.php">Overzicht</a>
        </body>

<?php
    }

}

if(isset($_POST["BtnWijzigen"])){
    $gedrag = $_POST["gedrag"];

    $sql = "UPDATE `dier` SET gedrag = '$gedrag'WHERE `did` = '$data->did'";
    $stm = $pdo->prepare($sql);
    if ($stm->execute()) {
        echo "is gelukt!!!";
    }
}
?>
</html>