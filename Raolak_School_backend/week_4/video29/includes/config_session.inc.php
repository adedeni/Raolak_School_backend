<?php
//starting session and securing it against attacks
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

// setting session paramters
session_set_cookie_params(
    [
        'secure' => true,
        'httponly' =>true,
        'domain' => 'localhost',
        'path' => '/',
        'lifetime' => 1800
    ]
);
session_start();
//setting session id intervally

if(isset($_SESSION["user_id"])){
    if (!isset($_SESSION["last_regeneration"])){
        regenerate_session_id_loggedin();
}
else{
$interval = 60 * 30;
if (time() - $_SESSION['last_regeneration'] >= $interval){
    regenerate_session_id_loggedin();
}
}

}
else{
    if (!isset($_SESSION["last_regeneration"])){
        regenerate_session_id();
}
else{
$interval = 60 * 30;
if (time() - $_SESSION['last_regeneration'] >= $interval){
    regenerate_session_id();
}
}
}
function regenerate_session_id_loggedin(){
                session_regenerate_id(true);
                $userId = $_SESSION["user_id"];
                $_SESSION['last_regeneration'] = time();
                $newSessionId = session_create_id();
                $sessionId = $newSessionId."_". $userId;
                session_id($sessionId);
}
function regenerate_session_id(){
                session_regenerate_id(true);
                $_SESSION['last_regeneration'] = time();
}
    