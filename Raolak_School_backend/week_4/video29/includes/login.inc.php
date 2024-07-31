<?php

if ($_SERVER["REQUEST METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        //error handlers
        $errors = [];
       if (is_input_empty($username, $pwd)) {
        $errors["empty_input"] = "Fill in all fields";
       }
       
       $result = get_user($pdo, $username);

  require_once "config_session.inc.php";

    if ($errors) {
        $_SESSION["error_signup"] = $errors;

        $signupData = [
            "username" => $username,
            "email" => $email
        ];
        $_SESSION["signup_data"] = $signupData;
        header("Location: ../index.php");
        die ();
    }
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header ("location: ../index.php");
    die ();
}