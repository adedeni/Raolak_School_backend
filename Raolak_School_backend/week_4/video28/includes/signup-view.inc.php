<?php
declare(strict_types=1);

function check_signup_errors () {
    if (isset($_SESSION["error_signup"])) {
        $errors = $_SESSION["error_signup"];


        echo "<br>";

        foreach ($errors as $error) {
            echo "<p>" . $error . "</p>"

        }
        unset ($_SESSION["error_signup"]);//this is to immediately delete the session variable after use for security reason
    }
}