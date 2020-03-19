<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai tap buoi 2</title>
</head>

<body>

    <?php
    //bai 1;
    // echo 'bai  1';
    // $tong = 0;
    // $a = 1;
    // while ($a <= 100) {
    //     $tong += $a;
    //     $a++;
    // }
    // echo 'Tong cac so tu 1- 100 : ' . $tong . '<br>';

    // for ($i = 25; $i <= 50; $i++) {
    //     if ($i % 3 == 0) {
    //         echo $i . '  ';
    //     }
    // }

    // echo  '<br>' . 'bai  2' . '<br>';
    // $tongkoBinhphuong = 0;
    // $tongBinhphuong = 0;
    // for ($i = 1; $i <= 100; $i++) {


    //     $tongkoBinhphuong = $tongkoBinhphuong + $i;
    //     $tongBinhphuong = $tongBinhphuong + $i * $i;
    //     if ($i == 70) continue;
    //     //  if ($i == 50) break;
    // }
    // echo $tongkoBinhphuong . '<br>' . $tongBinhphuong;

    // echo '<br>' . 'bai  3' . '<br>';
    // $mang = array(2, 1, 3, 4);

    // $min = $mang[0];
    // $max = $mang[0];
    // $sum = 0;

    // foreach ($mang as $value) {
    //     if ($max < $value) {
    //         $max = $value;
    //     }
    //     if ($min > $value) {
    //         $min = $value;
    //     }
    //     $sum += $value;
    // }
    // echo 'MAX = ' . $max . ' ' . 'MIN = ' . $min;
    // echo '.  TB cong  ' . $sum / count($mang);



    //bt them
    // so nguyen to 

    $mangS = array(1, 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37);
    foreach ($mangS as  $value) {
        if (isNguyento($value)) {
            echo $value . ',';
        }
    }
    function isNguyento($n)
    {
        if ($n == 1) return false;
        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    ?>

</body>

</html>