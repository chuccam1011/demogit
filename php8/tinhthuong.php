<?php
class Thuong
{

    public $tienthuong;
    public $soSP;
    public function getSP($soSP)
    {
        $this->soSP = $soSP;
    }
    public function tinhThuong()
    {
        if ($this->soSP <= 10) {
            $this->tienthuong = 1;
        }
        if ($this->soSP >= 11 & 20 > $this->soSP) {
            $this->tienthuong = 2;
        }
        if (50 > $this->soSP & $this->soSP  >= 20) {
            $this->tienthuong = 3.5;
        }
        if ($this->soSP >= 51) {
            $this->tienthuong = 5;
        }
        return $this->tienthuong;
    }
}

if (isset($_POST['submit'])) {

    $soSP = $_POST['sosp'];
    $tienthuong = 0;
    $thuong = new Thuong();
    $thuong->getSP($soSP);
    $tienthuong =  $thuong->tinhThuong();
    // echo $thuong;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tinh thuong</title>
</head>

<body>

    <form action="" method="post">
        <label for="">Nhap so SP : </label> <input type="number" name="sosp" id="">
        <label for="">So tien thuong :</label> <input type="number" name="tienthuong" value="<?php echo $tienthuong; ?>" id="">
        <input type="submit" name="submit" value="Tinh thuong" id="">
    </form>

</body>

</html>