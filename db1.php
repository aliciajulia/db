<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "lekpark");

$dbh = new PDO('mysql:dbname='.DB_NAME.';host='.DB_SERVER.';charset=utf8',DB_USER,DB_PASSWORD);

$sql = "UPDATE attraktioner SET namn='rutschkana' WHERE id=2";
$stmt = $dbh->prepare($sql);
$stmt->execute();


$sql = "SELECT * FROM attraktioner";
$stmt = $dbh->prepare($sql);
$stmt->execute();
        
$leksaker = $stmt->fetchAll();

foreach ($leksaker as $leksak){
    echo $leksak["namn"];
    echo "<br>";        
}

?>