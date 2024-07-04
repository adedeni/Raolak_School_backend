<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--these are user-define fuctions; these are function we can create ourselfs-->
    <?php
    function sayHello(string $name = "this is the default value") {
        return "hello " . $name . "!";
    };
    $test = sayHello("124");//so if a varible is "adedeni" is not passed here the code will return "this is the default value" otherwise the variable "adedeni"
    echo $test;
    ?>
    <br>
    <?php

     $name = "this is the default value";

    function calculator(int $num1, int $num2) {
        $result = $num1 + $num2;
        return $result;
        
        global $name;
        return $name;
    };
    $test = calculator(7, 13);
    echo $test;
    echo "<br>";
    echo $name
    ?>
</body>
</html>