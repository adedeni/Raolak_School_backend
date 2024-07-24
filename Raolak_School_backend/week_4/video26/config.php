<?php

ini_set('session.use_only_cookies', 1);//1 here means true, this make is that sessionID is passed only through cookies
ini_set('session.use_strict_mode', 1);//this will make your website only use sessionID that has been created by server inside the website and make sessionID more complex to make your sessionID difficult to guess

session_set_cookie_params([
    'lifetime' =>1800,//this is setting a lifespan for a cookie after a predefine time, like countdown it is measure in secnods and 1800 here means 30minutes
    'domain'=> 'localhost',//this is ensuring a cookies works inside a single domain for example since we are using xamp our domain is localost if you are using another hosting domain that is what you will use
    'path' =>'/',//this makes your cookies inside any path/subdirectories inside the webite
    'secure' => true,//this is to ensure the cookies in only run on https (secure) website only
    'httponly' => true,//this restrict the client script access inside the browser
]);//these are cookies parameters to make it more secure
session_start();

session_regenerate_id(true);//this is regenerating the ID to make it more secure version
//session_create_id; this can also be use to crete a new session insteasd of regenerating
if(!isset($_SESSION['last_regeneration'])){
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}else{
    $interval = 60 * 30;//this means 30 minutes
    if (time() - $_SESSION['last_regeneration'] >= $interval){
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}//this is to make the session regeneration periodic
