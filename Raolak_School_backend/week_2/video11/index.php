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

    echo strlen($string);//string length
    ?>
    <br>
    <?php 
    $string = "we dey outside";

    echo strpos($string, "i");//position of a certain string position
    ?>
    <br>
    <?php 
    $string = "we dey outside";

    echo str_replace("outside", "inside", $string,);//to replace a particular string
    ?>
    <br>
    <?php 
    $string = "we dey outside";

    echo strtoupper($string);//uppercase or lower case stringtolower
    ?>
     <br>
    <?php 
    $string = "we dey outside";

    echo substr($string, 1, -2);//this is to delete a string from front and back
    ?>
    <br>
    <?php 
    $string = "we dey on the roof";

    print_r(explode(" ",$string));//whatever is in the aprostophe would be excluded from the array
    ?>
    <br>
     <?php 
    $number = -5.5;

    echo abs($number);//absolute number: won't mind sign
    ?>
    <br>
    <?php 
    $number = -5.5;

    echo round($number);//round up to whole number
    ?>
    <br>
    <?php 
    $number = -5.5;

    echo pow(2,7);//raise to power
    ?>
    <br>
    <?php 
    $number = -5.5;

    echo sqrt(81);//square root
    ?>
    <br>
    <?php 
    $number = -5.5;

    echo rand(2,1000);//random
    ?>
    <br>
    <?php 
    $array = ["apple", "banana", "carrot"];

    echo is_array($array);//true of false
    ?>
    <br>
    <br>
    <?php 
    $array = ["apple", "banana", "carrot"];

    array_push($array, "kiwi");//adding data to an array
    print_r($array)
    ?>
    <br>
    <?php 
    $array = ["apple", "banana", "carrot"];

    array_pop($array);//removing data to an array

    print_r($array)
    ?>
    <br>
    <?php 
    $array = ["apple", "banana", "carrot"];

    print_r(array_reverse($array));//reversing an array
    ?>
    <br>
    <?php 
    $array = ["apple", "banana", "carrot"];
    $array1 = ["drug", "television", "phone"];
    print_r(array_merge($array, $array1));//merging an array together at the end, note splice can add from any point of the array
    ?>
    <br>
    <?php 
    echo date("Y-m-d-H:i:s");//different date format

    echo "<br>";
    echo time();//this is the accumulation of total seconds since 01/01/1970; it is useful for finding the time stamp and time difference of two date
    ?>
    <br>
    <?php 
    $date = "1997-08-14 12:30:00";
    echo strtotime($date);//this is the time stamp of my birthday
    ?>
    <!--these are other numerous PHP functions::https://www.php.net/manual/en/functions.internal.php https://www.exakat.io/en/top-100-php-functions/-->
</body>
</html>