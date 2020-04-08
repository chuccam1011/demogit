<?php
class HocSinh
{
    public $id, $name, $age, $adress;
    public function __construct($id, $name, $age, $adress)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->adress = $adress;
    }
    public function  display()
    {

        echo $this->id . ' ' . $this->name . ' ' . $this->age . ' ' . $this->adress;
    }
}


if (isset($_POST['submit'])) {
    echo 'this is the info : ';
    $id = 1;
    $name = $_POST['hoten'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $hs = new HocSinh($id, $name, $age,  $address);
    $hs->display();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAI TAP PHP 8</title>
</head>

<body>

    <form action="index.php" method="POST">
        <label for="">HO va ten : </label><input type="text" name="hoten" placeholder=" ho va ten " value=""><br>
        <label for="">Age : </label><input type="number" name="age" placeholder=" Tuoi" value=""><br>
        <label for="">Address : </label><input type="text" name="address" placeholder="Dia chi " value=""><br>
        <input type="submit" name="submit" value="submit">

    </form>

</body>

</html>