<?php

$file = fopen('uploads/bt.txt', 'r') or die("Unbale ti open file");

while(!feof($file)){
    echo fgetc($file).'<br>';
}
fclose($file);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>duyet file</title>
</head>

<body>

</body>

</html>