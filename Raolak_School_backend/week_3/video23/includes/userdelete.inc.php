<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
$username = $_POST["username"];
$pwd = $_POST["pwd"];


try {
    require_once "dbh.inc.php";//linking to another file

    $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    
    $pdo = null;
    $stmt = null;
    header("Location: ../index.php");
    die ();
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());//this is to terminate the code
}
}else{
    header("Location: ../index.php");
}