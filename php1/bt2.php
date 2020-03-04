<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bt 2 php1</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="thu" id="thu">
        <input type="submit" value="Submit">
    </form>

    <?php
    $thu = $_POST['thu'];
    switch ($thu) {
        case 0:
            # code...
            echo 'Ngay thu 2';
            break;
        case 2:
            # code...
            echo 'Ngay thu 3';
            break;
        case 3:
            # code...
            echo 'Ngay thu 4';
            break;
        case 4:
            # code...
            echo 'Ngay thu 5';
            break;
        case 5:
            # code...
            echo 'Ngay thu 6';
            break;
        case 6:
            # code...
            echo 'Ngay thu 7';
            break;

        case 8:
            # code...
            echo 'Ngay chu nhat';
            break;
        default:
            # code...
            echo "ko Hop le";
            break;
    }

    ?>
</body>

</html>