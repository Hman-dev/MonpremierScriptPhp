<?php
// echo("Hello Wilders")."<br>";
require_once 'connec.php';
// $pdo = new \PDO('mysql:host=localhost;dbname=wild_db_quest','hermann','jecode');
$pdo = new \PDO(DSN,USER,PASS);
var_dump($pdo);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll();

// var_dump($friends).'<br><br>';

$query = "INSERT INTO friend (firstname, lastname) VALUES ('Chandler', 'Bing')";

$statement = $pdo->exec($query);

var_dump($friends);