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
        $errors = [];
       if (is_input_empty($username, $pwd, $email)) {
        $errors["empty_input"] = "Fill in all fields";
       }
       if (is_email_invalid($email)) {
        $errors["invalid_email"] = "invalid email used";
       }
       
       if (is_username_taken($pdo, $username)) {
        $errors["username_taken"] = "This username already exist";
       }
       
       if (is_email_registered($pdo, $email)) {
        $errors["email_used"] = "Email already exist";
    }

  require_once "config_session.inc.php";//this is to link to a start session function in our config file

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
    create_user($pdo, $username, $pwd, $email);

    header("Location: ../index.php?signup=success");//this is to send to success page
    $pdo = null;
    $stmt = null;
    die ();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else{
    header("Location: ../index.php");
    die ();
}