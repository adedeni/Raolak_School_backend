<?php
//this to do password specific hashing

$pwdSignup = "adedeni123";//normally this is suppose to be the data you get from your form through post or get method

$option = [
    'cost' => 12

];
$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $option);//you can use PASSWORD_DEFAULT too that is the hashing algorithm, $optionis cost factor which makes submitting passwords slower

$pwdLogin = 'adedeni153';//this is the password the user try to login with
if(password_verify($pwdLogin, $hashedPwd)){
    echo "correct password";
} else{
    echo "incorrect password";
}//this is to compare the input password and hashed password on our database to know if they are the same

