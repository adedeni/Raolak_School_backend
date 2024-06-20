<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>
        <?php 
        $nameFullname_011 = "Adedeni";
        echo "this is an inline PHP codeline header";?> <br></H1><br>
        
    <?php echo "This is another paragraph in PHP";
    /*these are set of scalar variable types, which usually contains one data value*/
    $string = "Adedeni"; //string type for text
    $int = 12345; //interger type for number
    $float = 3.1247; /*float type for number with decimal point*/
    $bool = false; /*boolean type for true or false statement 0 and 1 can also work for this where 0 is false and 1 is true*/

    /*these are set of array variable types, which contains multiple piece of data*/
    $names = array ("Adedeni", "Pea");
    $userName = ["promise360", "promise07"];

    //object type variable equalling object
    //$object = new $Car($TOYOTA);those $ are not suppose to be there i put it to avoid the error prompt
    ?>
    <?php $name = "Femsam";
     ?>
    <h1>This is your boy Ade, chilling with <?php echo $name ?></h1>
</body>
</html>