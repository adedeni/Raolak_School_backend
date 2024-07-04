<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--there are different types of control structures, which are condition, switch, match, include, loop, etc-->
    <?php
    $bool = true;
    $a = 1;
    $b = 4;
    if ($a < $b && !$bool) {
        echo "The first condition is true";
    }
    elseif ($a < $b && $bool) {
        echo "The second condition is true";
    }
    else {
        echo "None of the conditions is true";
    }
    ?>
    <?php
    $bool = true;
    $a = 1;
    $b = 4;
    switch ($a){//it is similar to if, else, elseif, difference is that in if we can check for the value of more than one variable where in switch we can on check for one variable
        case 4://note this is not case 4, instead it is checking if variable a is 4 in the first case
            echo "The first case is correct";
            break;//break to end the code
        case 2:
                echo "The second case is correct";
                break;
        default:
        echo "none of thsi were true";
    }
    ?>
    <br>
    <?php 
    //this is for match,the difference between match and switch is that march is like ===, while switch ==
    $bool = true;
    $a = 1;
    $b = 4;
    
    $result = match ($a) {
        7 => 'variable equals one',
        4 => 'variable equals four',
        default => "none were a match"
    };
    echo $result
    ?>
</body>
</html>