<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 4</title>
</head>

<body>
    <?php
    // date_default_timezone_set('Asia/Bangkok');
    // echo 'Today is : ' . date('yy/m/d', time()) . '<br>';
    // echo strtotime('1-1-1970');

    //bai 1 

    function sum($num1, $num2)
    {
        return $num1 + $num2;
    }
    function minus($num1, $num2)
    {
        return $num1 - $num2;
    }
    function divide($num1, $num2)
    {
        return $num1 / $num2;
    }
    function mutiple($num1, $num2)
    {
        return $num1 * $num2;
    }
    ?>

    <form action="" method="POST">
        <input type="number" value="" name="num1">
        <input type="number" value="" name="num2">
        <input type="submit" value="Submit">
    </form>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $sum = sum($num1, $num2);
    $minus = minus($num1, $num2);
    $divi = divide($num1, $num2);
    $muti = mutiple($num1, $num2);
    echo 'Toogn  2 so  la : ' . $sum.'<br>';
    echo 'Hieu 2 so  la : ' . $minus.'<br>';
    echo 'THuong  2 so  la : ' . $divi.'<br>';
    echo 'Tich  2 so  la : ' . $muti.'<br>';
    ?>
</body>

</html>