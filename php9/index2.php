<?php
session_start();
echo 'Welcome ' . $_SESSION['name'];

if (isset($_GET['logout'])) {
    unset($_SESSION['pass']);
    unset($_SESSION['name']);
    header('Location:login.php');
    var_dump($_GET);
}



try {
    $pdo = new PDO('mysql:host=localhost;dbname=rapphim', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo "Connected successfully";
} catch (\Throwable $e) {
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $pdo->prepare('INSERT INTO login(name,pass) VALUES (:name,:pass) ');


$stmt->bindParam(':name', $name);
$stmt->bindParam(':pass', $pass);
if (isset($_SESSION)) {
    $name =  $_SESSION['name'];
    $pass =  $_SESSION['pass'];
    $stmt->execute();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <a href="?logout">Logout</a>
</head>

<body>

</body>

</html>