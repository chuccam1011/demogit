<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leetcode</title>
</head>

<body>

    <?php

    $num = array(2, 7, 11, 15);
    $target = 9;
    twoNum($num,$target);
    function twoNum($num, $target)
    {
        
        for ($i = 0; $i < count($num); $i++) {
            for ($j = 0; $j < count($num) - 1; $j++) {
                if ($num[$i] + $num[$j] == $target) {
                    $res=array($i,$j);
                   return $res;
                }
            }
        }
    }
    ?>

</body>

</html>