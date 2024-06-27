<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
    <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ; ?>" method="POST">
        <input type="number" name="firstnumber" placeholder="first number">
        <select name="operator"><option value="add">+</option>
        <option value="minus">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option></select>
        <input type="number" name="secondnumber" placeholder="second number">
        <button>Calculate</button>
    </form>
    <?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        //this is to grab and then sanitize data
        $firstnumber = filter_input(INPUT_POST, "firstnumber", FILTER_SANITIZE_NUMBER_FLOAT);
        $secondnumber = filter_input(INPUT_POST, "secondnumber", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);
        //errors handler
        $errors = false;
        if (empty($firstnumber) || empty($secondnumber) || empty($operator)) {
            //this is to ensure no empty data is submitted
            echo "calc-error fill all fields";
            $errors = true;
        }
        if (!is_numeric($firstnumber) || !is_numeric($firstnumber)) {
            echo "calc-error only write number";
            $errors = true;
        }
        //calculate number if no errors
        if (!$errors) {
            $value = 0;
            switch ($operator) {
                case "add":
                    $value = $firstnumber + $secondnumber;
                    break;
                case "subtract":
                    $value = $firstnumber - $secondnumber;
                    break;
                case "divide":
                    $value = $firstnumber / $secondnumber;
                    break;
             case "multiply":
                    $value = $firstnumber * $secondnumber;
                    break;
                default:
                echo "Something went wrong!";
            }
            echo "Result = " . $value ." ";
        }
    }
    ?>
</body>
</html>