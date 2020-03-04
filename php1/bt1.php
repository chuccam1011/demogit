<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap 1 php </title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="sodien" id="sodien">
        <input type="submit" value="Tinh Tien Dien">
    </form>

    <?php
    $giaDien;
    $soDien = $_POST['sodien'];

    if ($soDien <= 100) {
        $giaDien = 450;
        TinhTien($giaDien, $soDien);
    } elseif ($soDien <= 200) {
        $giaDien = 600;
        TinhTien($giaDien, $soDien);
    } elseif ($soDien <= 300) {
        $giaDien = 750;
        TinhTien($giaDien, $soDien);
    } elseif ($soDien <= 500) {
        $giaDien = 900;
        TinhTien($giaDien, $soDien);
    } elseif ($soDien <= 1000) {
        $giaDien = 1200;
        TinhTien($giaDien, $soDien);
    } elseif ($soDien > 1000) {
        $giaDien = 1200;
        TinhTien($giaDien, $soDien);
    }
    function TinhTien($giaDien, $soDien)
    {
        echo "So Dien: " . $soDien . "<br>";
        echo "Gia Dien: " . $giaDien . "<br> ";
        $tienDien = $giaDien * $soDien;
        echo "Tien DIen Phai Dong: " . $tienDien . '<br>';
        $tienDienVAT = $tienDien + $tienDien / 10;
        echo "Tien Dien sau khi tinh VAT (10%) : " . $tienDienVAT;
    }
    ?>
</body>

</html>