<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php
            // set cokie
            // setcookie('school', 'niit', time() + 60 * 2 * 2); // time laf  to
            // if (isset($_COOKIE['school'])) {
            //     echo 'ton tai cokie ' . $_COOKIE['school'];
            // } else {
            //     echo 'ko to tai';
            // }
            // ?>

    <a href="xoa.php">xoa</a>
     -->




    <?php
    if (!isset($_SESSION['school'])) {
        $_SESSION['school'] = 'niit';
    }
    if (isset($_SESSION['school'])) {
        echo $_SESSION['school'];
    } else echo 'ko  ton tai sesion';
    ?>
</body>

</html>