<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 2</title>
</head>

<body>
    <?php

    // for ($i = 0; $i < 10; $i++) {
    //     echo '<p>' . $i . '</p>' . ' ';
    // }
    // $a = 1;
    // do {
    //     echo $a;
    //     $a++;
    // } while ($a <= 10);

    // $b = 10;
    // echo "<br>";

    // while ($b >= 0) {
    //     echo $b;
    //     $b--;
    // }

    // for ($i = 0; $i < 5; $i++) {
    //     if ($i == 3) {
    //         return;
    //     }
    //     echo  $i;
    // }

    $mang = array(1,2,3,4,5,7);
    foreach ($mang as  $value) {
      echo $value;
    }
    ?>
</body>

</html>