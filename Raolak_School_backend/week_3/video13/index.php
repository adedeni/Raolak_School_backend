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
        $localVariable = "this is a local scope";//normally any variable here cannot be access outsite the function{} make it a local scope
        return $localVariable;
        return $GLOBALS['localVariable'];//this is a superglobal to make the variable a global scope
    }
    echo newFunction();
    ?>
    <br>
    <?php
    $test = "adedeni";
    function myFunction() {
    static $staticVariable = 0;//putting static here means the function can be used anywhere in the script: static variable here means the variable won't reset itself so next time the variable is used the output would be 2 and it will contiue to increase
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