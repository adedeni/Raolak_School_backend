<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <center>
        <h3>
        <?php
    output_username()
        ?>
        </h3>
        <?php
        if(!isset($_SESSION["user_id"])){?>
        <h3>Login</h3>
    <form action="includes/login.inc.php" method="POST">
            <input type="text" name="username" placeholder="Enter Your Username">
            <br><br>
            <input type="password" name="pwd" placeholder="Enter Your Password">
            <br><br>
            <button><b>login</b></button>
    </form>

       <?php }
        ?>
    
    <?php
   check_login_errors();
    ?>
            <br><br>
            <h3>Sign Up</h3>
            <form action="includes/signup.inc.php" method="POST">
            <?php
            signup_inputs();
            ?>
            <button><b>Signup</b></button>
    </form>
    
    <?php
    check_signup_errors();
    ?>
    <br><br>
      <form action="includes/logout.inc.php" method="POST">
            <button><b>logout</b></button>
    </form>
    </center>
</body>
</html>