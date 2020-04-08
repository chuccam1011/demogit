<?php
$file = fopen('wt.txt', 'r') or die("ko  the mo ");
$info = array();
$i=0;
while (!feof($file)) {
    $info[$i] = fgets($file);
    $i++;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View </title>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <td colspan="2" align="center" with="200">
                <font size="+1">&nbsp;Phieu dang ly</font>
            </td>
        </tr>
        <tr>
            <td align="right" with="400">
                Ho ten &nbsp;
            </td>
            <td><input value="<?php echo $info[0]; ?>" type="text" name="hoten" size="30"></td>
        </tr>
        <tr>
            <td align="right" with="400">
                Gio tinh &nbsp;
            </td>
            <td><input <?php if ($info[1] == 1) echo 'checked';  ?> type="radio" name="gender" value="1" size="30">Nam
                <input <?php if ($info[1] == 0) echo 'checked';  ?> type="radio" name="gender" value="0" size="30">Nu
            </td>
        </tr>
        <tr>
            <td align="right">Hinh &nbsp;
            </td>
            <td>
                <img height="200px" width="300px" src=" <?php echo $info[2];  ?>" alt="Hinh anh">
            </td>
        </tr>

    </table>
</body>

</html>