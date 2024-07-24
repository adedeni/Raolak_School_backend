<?php
session_start();//this is how to start a session in a page, this will crate a session ID on your cookie

unset($_SESSION["username"]);//this is to unset a single session data you have started
//session_unset();this is to purge all session that have been started
//session_destroy();this will work on all session of other pages first, it will not work on the same page, you can also combine session_destroy(); and session_unset(); to destroy all session on all pages
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //this is a code for creating a session
    echo $_SESSION["username"];
    ?>
</body>
</html>