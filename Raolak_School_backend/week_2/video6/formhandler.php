<?php
//var_dump($_SERVER["REQUEST_METHOD"]); this is just to let us know if this codefile was access using post or get method
//if (isset($_POST["submit"])){ then the data grabbing code}: this is another method of doing the if ($_SERVER).... although it is not the best way
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //this line of code above it to ensure that the following code only run if the user access this file using post method in another case get method
    $firstname = htmlspecialchars( $_POST["firstname"]);
    //the htmlspecialchars is ensure the user do not input anything aside what is needed (this is sanitizing your data)
    $lastname = htmlspecialchars( $_POST["lastname"]);
    $petsname = htmlspecialchars( $_POST["favouritepet"]);
    if (empty($firstname)) {
        //this is to ensure the user did not leave any part of the form empty otherwise it will exit the code and/or send them to a error page
        exit();
        header("Location: index.php");
    }
    if (empty($lastname)) {
        exit();
        header("Location: index.php");
    }
    if (empty($petsname)) {
        exit();
        header("Location: index.php");
    }
    echo "These are the data the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $petsname;

    header("Location: index.php"); //this is to send user to a html page that is different from this formhandler you can create a success page for this
} else {
    header("Location: index.php");//this is to ensure that if the "if" condition is not met then then you will be sent to the page here; you can create a error page for this
}