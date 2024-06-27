<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $string = "we dey outside";

    echo strlen($string);
    ?>
    <br>
    <?php 
    $string = "we dey outside";

    echo strpos($string, "i");
    ?>
    <br>
    <?php 
    $string = "we dey outside";

    echo str_replace("outside", "inside", $string,);
    ?>
    <br>
    <?php 
    $string = "we dey outside";

    echo strtoupper($string);//uppercase or lower case
    ?>
     <br>
    <?php 
    $string = "we dey outside";

    echo substr($string, 1, -3);
    ?>
</body>
</html>