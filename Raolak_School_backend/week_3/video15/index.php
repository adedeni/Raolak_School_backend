
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
//these are types of loop
    $test = 15;
    for ($i = 0; $i <= $test; $i++) {
        echo "this is iteration number" . $i . "<br>";
    }//i=iteration, starting point, second one is where the loop ends, third one is the incremental value :this is for loop
    
    $boolean = true;//the difference is that in for loop the condition for loop is inside () also it is more used for numbers most, while loop the condition is inside {} and it is used for things you can put in if statement
    while ($boolean) {
        echo $boolean;
        $boolean = false;

    }
    echo "<br>";
    $test = 10;
    do {
        echo $test;
        $test++;
    }
    while ($test < 10);// do while loop would first echo the first loop whether it is true or false first, before looking at further condition
echo "<br>";
    $eso = ["apple", "banana", "mango", "carrot"];
    foreach ($eso as $fruit) {
        echo "this is a " . $fruit ." <br>";
    };//the 'as' is a keyword and fruit is like a placeholder so you can have something to call the data in the array
    echo "<br>";
    $eran = ["white" => "egg", "red" => "beef", "brown" => "ponmo"];
    foreach ($eran as $color => $meat) {
        echo "This is a " . $meat . ", that has a color of " . $color . "<br>";
    };
    ?>
</body>
</html>