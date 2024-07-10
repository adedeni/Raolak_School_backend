<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <form class="form" action="formhandler.php" method="post">
    <label for="firstname">Firstname</label>
        <input id="firstname" type="text" name="firstname" placeholder="Firstname....."> <br>
        <label for="Lastname">Lastname</label>
        <input id="lastname" type="text" name="lastname" placeholder="Lastname.....">
        <br>
        <label for="Middlename">Middlename</label>
        <input id="middlename" type="text" name="middlename" placeholder="Middlename....."> <br>
        <label for="Gender">Gender</label> <br>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br>
        <label for="phone">Phone Number:</label><br>
        <input type="number" id="phone" name="phone" placeholder="090123567"><br>
        <label for="wallet">Wallet Balnce</label><br>
        <input type="number" id="wallet" name="wallet" placeholder="put your wallet balance here"><br>
        <label for="email">Email</label>
        <input id="email" type="text" name="email" placeholder="put email here.....">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    </main>
</body>
</html>