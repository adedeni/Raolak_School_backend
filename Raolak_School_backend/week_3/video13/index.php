<?php
declare (strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //there are different types of scope; global scope are global scope which can be assess from anywhere within the scripts as long it is not inside another scope, local scope that can be assess from only inside the function, class scope, static scope
    $scope = "this is new scope";
    echo $scope;
    ?>
    <br>
    <?php
    global $test;//this is to make this variable accessible inside a function or anywhere in the script
    function newFunction(){
        $localVariable = "this is a local scope";
        return $localVariable;
    }
    echo newFunction();
    ?>
    <br>
    <?php
    $test = "adedeni";
    function myFunction() {
    $staticVariable = 0;
    $staticVariable++;//increment
    return $staticVariable;
    }
    echo myFunction();

    echo myFunction();
    ?>
    <br>
    <?php
    $test = "adedeni";
    function staticFunction() {
    static $staticVariable = 0;//this makes the variable reuseable from the last use
    $staticVariable++;
    return $staticVariable;
    }
    echo staticFunction();
    echo staticFunction();
    echo staticFunction();
    ?>
    <br>
    <?php
    class MyClass//this is a class
    {
        public $classVariable = "We dey outside";//this is a class variable
        public function myMethod() {
            echo $this->classVariable;
        }
    }
    ?>
</body>
</html>