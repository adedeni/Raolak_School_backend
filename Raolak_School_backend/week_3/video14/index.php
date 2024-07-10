<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //this is about creating constant, these are data that should not be change
    define("PI", 3.14);// you cannot change the value of PI in subsequent codeline, PI is the name
    echo PI;
    define("NAME", "ade");
    echo NAME;
    define("IS_ADMIN", true);
    echo IS_ADMIN;

    function test(){
        echo PI;
    };
    test();
    ?>
</body>
</html>