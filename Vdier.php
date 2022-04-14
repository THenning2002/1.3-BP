<?php

require("database.php");

$query = "SELECT * FROM dier";
$stm = $pdo->prepare($query);
if ($stm->execute() == true)
{
    $result = $stm->fetchALL(PDO::FETCH_OBJ);
    foreach($reslut as $ $rij)
    {
        echo "$result->did";
    }
}else echo "Query mislukt";

?>