<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=rapphim', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo "Connected successfully";
} catch (\Throwable $e) {
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $pdo->prepare('INSERT INTO phone(masp,tensp,hangsx) VALUES (:masp,:tensp,:hangsx) ');

$stmt->bindParam(':masp', $masp);
$stmt->bindParam(':tensp', $tensp);
$stmt->bindParam(':hangsx', $hangsx);
if (isset($_POST['submit'])) {
    $masp = $_POST['masp'];
    $tensp = $_POST['tensp'];
    $hangsx = $_POST['hangsx'];
    $stmt->execute();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 9</title>
    bai1
    <br>
    <form action="" method="post">
        <label for="">Ma SP : </label><input type="text" name="masp" value="">
        <label for="">Ten SP : </label><input type="text" name="tensp" value="">
        <label for="">Hang SX : </label>
        <select name="hangsx" id="">
            <option value="nokia">Nokia</option>
            <option value="samsung">Samsung</option>
            <option value="vsmart">Vsmart</option>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>

</head>

<body>

</body>

</html>