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
    <br>
    <?php 
    $string = "we dey outside";

    print_r(explode(" ",$string));
    ?>
    <br>
     <?php 
    $number = -5.5;

    echo abs($number);
    ?>
    <br>
    <?php 
    $number = -5.5;

    echo round($number);
    ?>
    <br>
    <?php 
    $number = -5.5;

    echo pow(2,7);
    ?>
    <br>
    <?php 
    $number = -5.5;

    echo sqrt(81);//s
    ?>
    <br>
    <?php 
    $number = -5.5;

    echo rand(2,7);//random
    ?>
</body>
</html>