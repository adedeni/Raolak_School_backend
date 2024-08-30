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

       if (is_username_wrong($result)) {
        $errors["login_incorrect"] = "Incorrect login details!";
       }

       if (!is_username_wrong($result) && is_pwd_wrong($pwd, $result["pwd"])) {
        $errors["login_incorrect"] = "Incorrect login details!";
       }

  require_once 'config_session.inc.php';

    if ($errors) {
        $_SESSION["errors_login"] = $errors;

        header("Location: ../index.php");
        die ();
    }
    //this is to update the sesssion ID cookies whenever any changes is made on the website

    $newSessionId = session_create_id();
    $newSessionid = session_create_id();
    $sessionId = $newSessionId . "_" . $result["id"];
    session_id($sessionId);

    //this is to login the user with correct mail and pwd
    $_SESSION["user_id"] = $result["id"];
    $_SESSION["user_username"] = htmlspecialchars($result["username"]);

    $_SESSION['last_regeneration'] = time();

    header("Location: ../index.php?login=success");


    $pdo = null;
    $statement = null;

    die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header ("Location: ../index.php");
    die ();
}