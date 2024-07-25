<?php
declare(strict_types =1);
#require_once 'signup.inc.php';
require_once 'config_session.inc.php';
function signup_inputs(){
    if (isset($_SESSION["signup_data"]["name"])){
        echo ' <input type="text" name="name" placeholder="Enter Your Username" value ="'.$_SESSION["signup_data"]["name"].'">';
                    echo "<br><br>";
    }
    else{
        echo '<input type="text" name="name" placeholder="Enter Your Full name">';
        echo "<br><br>";
    }
  
            // <br><br>
            // <input type="text" name="username" placeholder="Enter Your Username">
            // <br><br>
            // <input type="text" name="pwd" placeholder="Enter Your Password">
            // <br><br>
            // <input type="email" name="email" placeholder="Enter Your E-mail">
            // <br><br>
            if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])){
                    echo ' <input type="text" name="username" placeholder="Enter Your Username" value ="'.$_SESSION["signup_data"]["username"].'">';
                    echo "<br><br>";
            } 
            else{
                echo '<input type="text" name="username" placeholder="Enter Your Username">';
                echo "<br><br>";
            }
            echo ' <input type="password" name="pwd" placeholder="Enter Your Password">';
            echo "<br><br>";
            if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])){
                echo ' <input type="text" name="email" placeholder="Enter Your E-mail" value ="'.$_SESSION["signup_data"]["email"].'">';
                echo "<br><br>";
        } 
        else{
            echo '<input type="text" name="email" placeholder="Enter Your E-mail">';
            echo "<br><br>";
        }
}
function check_signup_errors(){
 if (isset($_SESSION['errors_signup'])){
            $errors =  $_SESSION['errors_signup'];
                echo "<br>";
                foreach($errors as $error){
                        echo '<p style ="color:red;">'.$error.'</p>';
                }
            unset($_SESSION['errors_signup']);
 }
 else if(isset($_GET['signup']) && $_GET['signup'] === 'success' ){
                        echo "<br>";
                    echo '<p style="color:green">Signup Success!</p>';
 }
}