<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
    <main>
        <!--if you want to submit a form to the same page you are currently on, on the action attribute in form put this
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    instead of linking it to another php file in another page
-->
<form class="form" action="formhandler.php" method="post">
        <label for="firstname">Firstname</label>
        <input id="firstname" type="text" name="firstname" placeholder="Firstname....."> <br>
        <label for="Lastname">Lastname</label>
        <input id="lastname" type="text" name="lastname" placeholder="Lastname....."> <br>
        <label for="favouritepet">Favourite Pet</label>
        <select name="favouritepet" id="favouritepet">
            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="Cat">Cat</option>
            <option value="Horse">Horse</option>
        </select> <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    </main>
</body>
</html>