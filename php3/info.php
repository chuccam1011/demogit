
<?php 
session_start();
if(isset($_SESSION)){
    $info = $_SESSION;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
</head>
<body>  
  <?php 
    foreach ($info as $key => $value) {
        echo '<br>';
        echo $key.' - '.$value;

    }
  ?>


</body>
</html>