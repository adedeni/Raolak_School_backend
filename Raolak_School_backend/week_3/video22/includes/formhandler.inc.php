<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
$username = $_POST["username"];
$pwd = $_POST["pwd"];
$email = $_POST["email"];

try {
    require_once "dbh.inc.php";//linking to another file

    $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";//using named parameter to put data in our database
    
    //(?, ?, ?);";this is non-name parameter ? is used as a placeholder to include the column for values of our data for security reasons 
    $stmt = $pdo->prepare($query);//this is a prepare statement to submit the query to the database
    $stmt->bindParam(":username", $username);//this is binding data from user to the parameter
    $stmt->bindParam(":pwd", $pwd);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    //$stmt->execute([$username, $pwd, $email]);these are the data the users are goint to submit,in non-named parameter
    $pdo = null;//this is manually closing the connection to our database
    $stmt = null;//this is manually closing the statement
    header("Location: ../index.php");
    die ();
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());//this is to terminate the code
}
}else{
    header("Location: ../index.php");
}