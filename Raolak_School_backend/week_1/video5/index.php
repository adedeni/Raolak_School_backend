<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    ?>
    <?php //These are example of superglobal variable which the datas for it is embeded already in our server
    echo $_GET["name"];
    echo $_REQUEST["name"];
    echo $_FILES["name"];
    echo $_COOKIE["name"];
    $_SESSION["username"] = "ADEDENI";
    echo $_SESSION["username"];
    echo $_ENV["name"];
    ?>
</body>
</html>