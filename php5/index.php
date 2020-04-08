<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai tap 1</title>
</head>

<body>
    <form action="file.php" name="frmdangky" method="POST" enctype="multipart/form-data">
        <table border="1" align="center">
            <tr>
                <td colspan="2" align="center" with="200">
                    <font size="+1">&nbsp;Phieu dang ly</font>
                </td>
            </tr>
            <tr>
                <td align="right" with="400">
                    ho ten &nbsp;
                </td>
                <td><input type="text" name="hoten" size="30"></td>
            </tr>
            <tr>
                <td align="right" with="400">
                   Gio tinh &nbsp;
                </td>
                <td><input type="radio" name="gender" value="1" size="30">Nam
                    <input type="radio" name="gender" value="0" size="30">Nu
                </td>
            </tr>
            <tr>
                <td align="right">GUi hinh &nbsp;
                </td>
                <td><input type="file" name="file" id=""></td>
            </tr>
            <tr>
                <td align="right">&nbsp;</td>
                <td><input type="submit" name="gui" value="Gui" id="">
                    <input type="reset" name="reset" value="Nhap lai" id="">
                </td>
            </tr>
        </table>
    </form>

    

</body>

</html>