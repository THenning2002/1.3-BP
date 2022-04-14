<?php

require ("database.php");


if(isset($_GET['kid'])){
    $kid = $_GET['kid'];

    $sql = "SELECT * FROM `kooi` WHERE `kid` = $kid";
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
                <label for="ID">ID: <?php echo $kid;?> </label>
            </br>
                <label for="Hoeveel">Hoeveelheid: </label>
                <input id="hoeveel" type="text" name="hoeveel" value="<?php echo $data->hoeveel?>">
                </br>
                <input type="submit" name="BtnWijzigen" value="wijzigen">
            </form>
            <a href="kooi.php">Overzicht</a>
        </body>

<?php
    }

}

if(isset($_POST["BtnWijzigen"])){
    $hoeveel = $_POST["hoeveel"];

    $sql = "UPDATE `kooi` SET hoeveel = '$hoeveel'WHERE `kid` = '$data->kid'";
    $stm = $pdo->prepare($sql);
    if ($stm->execute()) {
        echo "is gelukt!!!";
    }
}
?>
</html>