<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
    <?php
    //these are string operator
    $a = "hello";
    $b = "world";
    $c = $a . " " . $b; //the . is use to combine two string together, the empty string is for space
    echo $c;
    ?>
    <br>
    <?php
    //these are arithmetic operator
   
    echo 1 / 2; //you can do + - * / here
    echo "<br>";
    echo 17 % 3; //this is called modulus, this will tell us the remainder whenever division is made
    echo "<br>";
    echo 17 ** 3; //this is raise to power
    echo "<br>";
    echo (17 + 3) * 4; //this is called precedent, used to change the order of BODMAS if you want
    ?>
    <br>
    <?php
    //these are assignment operator
    $a = 3;
    $a /= 6;
    echo $a;
    ?>
    <br>
    <?php
    //these are comparison operator, = is to assign a data to a variable, == is to compare two variable, === is to compare two variable and there data types
    $a = 3;
    $b = 7;
    if ($a != $b){
        // ! here means "not" so in this case not==, you can also have < and >
        echo "this is a true statement";
    }
    ?>
    <br>
    <?php
    //these are logical operator
    $a = 3;
    $b = 7;
    $c = 5;
    $d = 9;
    if ($a != $b || $c == $d && $a > $d){
        // and, here means both condition must be true for the code to run, or means one of the condition must be true then the code will run: || means or, && means and
        echo "this is a true statement";

    }
    ?>
    <br>
    <?php
    //these are incrementing/decrementing operators
    $a = 5;
        echo ++$a;//++ is to add one, -- is to subtract one
        echo "<br>";
        echo $a--;
        echo "<br>";
        echo $a;
    ?>
</body>
</html>