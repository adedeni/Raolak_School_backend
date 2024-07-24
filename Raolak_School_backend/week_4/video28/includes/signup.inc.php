<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {

        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        //these are error handlers

        
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else{
    header("Location: ../index.php");
    die ();
}