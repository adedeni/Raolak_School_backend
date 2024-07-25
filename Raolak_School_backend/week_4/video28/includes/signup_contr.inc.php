<?php
declare(strict_types=1);

function is_input_empty(string $username, string $pwd, string $email){
    if (empty($username) || empty($pwd) || empty($email)) {
        return true;
    } else {
        return false;
    }
}//This is a function to ensure the form is fill if left empty

function is_email_invalid(string $email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}//this is a function to ensure the email submitted is valid and in our database

function is_username_taken(object $pdo, string $username){
    if (get_username($pdo, $username)) {
        return true;
    } else {
        return false;
    }
}
function is_email_registered(object $pdo, string $email){
    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}
function create_user(object $pdo, string $username, string $pwd,string $email){
    set_user ($pdo, $username, $email, $pwd);
}
//M-models takes care of quearing the database; V-view show output on our website C-control takes care of other function or information
