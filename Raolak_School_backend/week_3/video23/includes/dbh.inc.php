<?php
//this is a way to connet to the database using code, dsn means data source name, then mention the type of database type, the the type of host, then the name of database 
$dsn = "mysql:host=localhost;dbname=raolak_backend";
$dbusername = "root";
$dbpassword = "";//if you are using mac you have to put root as your password here

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);  //pdo-php data object is used as create php object when we want to connect to a data base
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}