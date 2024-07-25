<?php
declare(strict_types = 1);
// getting username stored in db
function get_username( object $pdo, string $username){//note we use obj $pdo directly because signup.inc.php has been connected to db already
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo -> prepare($query);
    $stmt -> bindParam(":username", $username);
    $stmt -> execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result; 
}

function get_email(object $pdo, string $email){
            $query = "SELECT email FROM users WHERE email = :email;";
            $stmt = $pdo -> prepare($query);
            $stmt -> bindParam(":email", $email);
            $stmt -> execute();
            $result = $stmt -> fetch(PDO::FETCH_ASSOC);
            return $result;
}

function set_user(object $pdo, string $name, string $pwd, string $username, string $email)
{
               
                $query = "INSERT INTO users (name, username, email, pwd) VALUES (:name, :username, :email, :pwd);";
                $stmt = $pdo->prepare($query);
                $options =[
                    'cost' => 12,
                ];
                $hashedpwd = password_hash($pwd, PASSWORD_BCRYPT, $options);
                $stmt ->bindParam(':name', $name);
                $stmt -> bindParam(':username', $username);
                $stmt -> bindParam(':email', $email);
                $stmt ->bindParam(':pwd', $hashedpwd);
                $stmt -> execute();
                
}