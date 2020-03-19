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

    // $mang = array(1, 2, 3, 4, 5, 7);
    // foreach ($mang as  $value) {
    //     echo $value;
    // }


    // $mangAssosc = array(

    //     'fullname'=>'chuc',
    //     'age'=> '23'
    // );

    // foreach ($mangAssosc as $key => $value) {
    //     echo $key." ".$value."<br>";
    // }


    //nang 2 chieuf

    // $mang2d = array(
    //     array(1, 2, 3, 4),
    //     array(1, 2, 3, 5)
    // );

    // $mang3d = array(
    //     array(1, 2, 3, 4),
    //     array(1, 2, 3, 5),
    //     array(2, 4, 5, 5)
    // );

    // foreach ($mang2d as $value) {
    //     foreach ($value as  $val) {
    //         echo $val.' ';
    //     }
    //     echo '<br>';
    // }

    // $mang2dAssoc = array(

    //     array(
    //         'name' => 'chuc',
    //         'age ' => '23'
    //     ),
    //     array(
    //         'ane' => 'd',
    //         'da' => 'da'
    //     )
    // );
    // //in mang 2 chiue lien hop
    //  echo '<br>';
    // foreach ($mang2dAssoc as $value) {

    //     foreach ($value as $key => $val) {
    //         echo $key . ' ' . $val . '<br>';
    //     }
    // }



    //String 

    $chuoi = 'chuoi';
    echo strpos($chuoi, 'i') . '<br>';
    echo strlen($chuoi);
    ?>
</body>

</html>