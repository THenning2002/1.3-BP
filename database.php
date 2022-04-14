<?php

$servername = "localhost";
$dbname = "dierentuin";
$username = "root";
$password = "";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>