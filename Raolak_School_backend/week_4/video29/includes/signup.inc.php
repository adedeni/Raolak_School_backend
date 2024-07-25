<?php
declare(strict_types=1);
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
$name = $_POST['name'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];
try {
   
            //Note, follow the order the files are imported below for purpose of OOP,

        require_once 'dbh.inc.php'; // This connect my signup page to the database my firstdatabase
        require_once 'signup_model.inc.php'; // this handles my queries(communicate with db)
        require_once 'signup_view.inc.php';// render interface to the browser/users
        require_once 'signup_contr.inc.php'; // handles checks and control the flow of application
        
        //ERROR HANDLER
            $errors = [];
        if(is_input_empty($name, $username, $pwd, $email)){
                $errors["empty_input"] = "Fill in all fields";
        }
        if (is_email_invalid($email)){
                $errors["invalid_email"] = "Invalid email used";
        }
        if(is_username_taken($pdo, $username)){
                    $errors["username_taken"] = "Username already taken";
        }
        if(is_email_registered($pdo, $username)){
            $errors["email_used"] = "Email already registered";

        }
        require_once 'config_session.inc.php';
        //session_start();
        if ($errors){
                $_SESSION["errors_signup"] = $errors;
                $signupData = [
                    "name" => $name,
                      "username" => $username,
                      "email" => $email  
                ];
                $_SESSION["signup_data"] = $signupData;
               header("Location: ../index.php");
               die();
        }
            create_user($pdo, $name, $pwd, $username, $email);
            header("Location: ../index.php?signup=success");
            $pdo = null;
            $stmt = null;
            die();
} catch (PDOException $e) {
    die("Query failed:" . $e->getMessage());
}
}
else{
        header("Location: ../index.php");
    die();
}