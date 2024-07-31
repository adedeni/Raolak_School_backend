<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup-view.inc.php';

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
    <h3>Sign-up</h3>

    <form action="includes/signup.inc.php" method="post">
    <?php
    signup_inputs ();
    ?>
    <button>Sign Up</button>
    </form>
    <?php
    check_signup_errors();
    ?>
</body>
</html>


