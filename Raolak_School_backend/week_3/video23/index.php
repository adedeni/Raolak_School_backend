<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<h3>CHANGE ACCOUNT</h3>
<body>
    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"> <br>
        <input type="password" name="pwd" placeholder="Password"> <br>
        <input type="text" name="email" placeholder="E-mail"> <br>
        <button>Update</button>
    </form>

    <h3>DELETE ACCOUNT</h3>
<body>
    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"> <br>
        <input type="password" name="pwd" placeholder="Password"> <br>
    
        <button>Delete</button>
    </form>
</body>
</html>