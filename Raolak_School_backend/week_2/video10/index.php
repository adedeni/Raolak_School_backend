<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //these are different method of writing an array
    $fruits1 = array("carrot", "groundnut", "cherry");
    $fruits2 = [
        "apple", //index array number 0
         "banana", //index array number 1
          "pear" //index array number 2
        ];
        $fruits2[] = "orange";//adding a data to an existing array
        $fruits2[2] = "mango";//this is replacing a data in an existing array
    
        //unset($fruits2[2]); this is to delete a data in an array
        array_splice($fruits2, 0, 1);//this is deleting a data in an array and moving all the data to cover the empty data cell
        echo $fruits2[2];
    ?>
    <br>
    <?php 
    $tasks = [
        "laundry" => "surpy",
     "cooking" => "tholuhin",
      "thrash" => "mercy"
    ];
    echo $tasks["laundry"];
    echo "<br>";
    print_r($tasks);
    echo "<br>";
    echo count($tasks);
    sort($tasks);//sorting alphabetically
    print_r($tasks);
     ?>
     <br>
     <?php 
      $fruits2 = [
        "apple", 
         "banana", 
          "pear"
        ];
        array_push($fruits2, "watermelon");
        print_r($fruits2);
      ?>
      <br>
      <?php 
      $fruits2 = [
        "apple", 
         "banana", 
          "pear"
        ];
        $anotherarray = ["strawberry","egg", "water"];
        array_splice($fruits2, 2, 0, $anotherarray);
        print_r($fruits2);
      ?>
      <br>
      <?php 
      $food = [
        array("apple","mango"),
        "banana",
        "cherry"
      ];

      echo $food[0][1];
      ?>
      <br>
      <?php
      $food = [
        "fruits" => array("apple", "banana", "cherry"),
        "meat" => array("egg", "fish", "chicken"),
        "vegetable" => array("carrot", "cucumber", "bus"),
      ];
      echo $food ["meat"][1];
       ?>
</body>
</html>