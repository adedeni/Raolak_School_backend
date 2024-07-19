<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
$userSearch = $_POST["usersearch"];

try {
    require_once "includes/dbh.inc.php";

    $query = "SELECT * FROM comments WHERE  username = :usersearch;";
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":usersearch", $userSearch);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);//this is to help us grab the data and make it equals to array in our code
    $pdo = null;
    $stmt = null;
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
}else{
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section><!--this is for styling-->
    <H3>Search Results:</H3>
    <?php
    if (empty($results)) {
        echo "<div>";
        echo "please enter search";
        echo "</div>";
//this if statement is to act has error handler to ensure a username that is not in our database does get a error response and if a user does not make a comment they would get no comment response
    } else {
        foreach ($results as $row) {
            echo "<div>";
            echo "<h3>" . htmlspecialchars($row ["username"]) . "</h3>";
            echo "<h4>" . htmlspecialchars($row ["comment_text"]) . "</h4>";
            echo "<p>" . htmlspecialchars($row ["created_at"]) . "</p>";
            echo "</div>";//htmlspecial character must be used if you are printing or echoing a userdata on the website from users query otherwise no need
        }
    }
    
    ?>
    </section>
</body>
</html>