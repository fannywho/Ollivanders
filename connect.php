<?php
try{
    // Créer une nouvelle classe PDO (objet) qui se connecte à la base de donnée
    $pdo = new PDO('mysql:dbname=db_potter;host=localhost','root','root');
} catch(PDOException $exception) {
    die($exception->getMessage());
}
$pdo->exec("SET NAMES UTF8");
