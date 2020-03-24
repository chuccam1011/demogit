<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>


<?php
// define variables and set to empty values
$lastnameErr = $firstnameErr = $addressErr = $MagazinesErr = $duarationErr = $paymenErr = $emailErr = $genderErr = "";
$lastname = $firstname = $address = $Magazines = $duaration = $paymen = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lastname "])) {
        $lastnameErr = "last_name is required";
    } else {
        $lastname = test_input($_POST["lastname "]);
    }
    if (empty($_POST["firstname "])) {
        $firstnameErr = "first_name is required";
    } else {
        $firstname = test_input($_POST["firstname "]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }


    if (empty($_POST["address"])) {
        $addressErr = "address is required";
    } else {
        $address = test_input($_POST["address"]);
    }

    if (empty($_POST["Magazines"])) {
        $MagazinesErr = "Magazines is required";
    } else {
        $Magazines = test_input($_POST["Magazines"]);
    }

    if (empty($_POST["duaration"])) {
        $duarationErr = "duaration is required";
    } else {
        $duaration = test_input($_POST["duaration"]);
    }
    if (empty($_POST["paymen"])) {
        $paymenErr = "payment is required";
    } else {
        $paymen = test_input($_POST["paymen"]);
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<style>
    .text-error {
        color: red;
    }

    .container {}

    .center {
        text-align: center;
    }

    .personal {
        border: seagreen 1px solid;
    }

    label {
        margin: 10px;
    }

    .mag,
    .duaration,
    .payment {
        border: seagreen 1px solid;
        margin-top: 10px;
    }
</style>

<body>

    <div class="container">

        <h2 class="center text-success">Supcription form</h2>
        <form action="" method="POST">

            <div class="personal">
                <h3>
                    Personal Information
                </h3>

                <div class="hoten">
                    <label for="">First Name:</label>
                    <input type="text" name="firstname"  placeholder="Ho va"><span class="text-error"> <?php echo $firstnameErr; ?></span>
                    <label for="">Last Name:</label>
                    <input type="text" name="lastname"  id="" placeholder="Ten"><span class="text-error"><?php echo $lastnameErr; ?></span>
                </div>

                <div class="gender">
                    <input type="radio" name="gender" value="Male" id=""><label for="">Male</label>
                    <input type="radio" name="gender" value="FeMale" id=""><label for="">FeMale</label>
                    <span class="text-error"><?php echo $genderErr; ?></span>
                </div>

                <div class="add">
                    <label for="">Address :</label><br>
                    <textarea name="address" id="" cols="30" rows="5"></textarea><span class="text-error"><?php echo $addressErr; ?></span>
                </div>
            </div>

            <div class="mag">
                <h3 class="Magazines">Magazines subcription for </h3>
                <input type="checkbox" value="TIME" name="Magazines" id=""> <label for="">TIME</label>
                <input type="checkbox" value="Newsweek" name="Magazines" id=""><label for="">Newsweek</label>
                <input type="checkbox" value="Punday" name="Magazines" id=""><label for="">Punday</label>
                <input type="checkbox" value="Pogue" name="Magazines" id=""><label for="">Pogue</label>
                <input type="checkbox" value="Peple" name="Magazines" id=""><label for="">Peple</label>
                <span class="text-error"><?php echo $MagazinesErr; ?></span>
            </div>
            <div class="duaration">
                <input type="radio" value="1 Years" name="duaration" id=""><label for="">1 Years</label>
                <input type="radio" value="3 Years" name="duaration" id=""><label for="">3 Years</label>
                <input type="radio" value="5 Years" name="duaration" id=""><label for="">5 Years</label>
                <span class="text-error"><?php echo $duarationErr; ?></span>
            </div>
            <div class="payment">
                <input type="radio" value="Demam Draft" name="paymen" id=""><label for="">Demam Draft</label>
                <input type="radio" value="Credit card" name="paymen" id=""><label for="">Credit card</label>
                <span class="text-error"><?php echo $paymenErr; ?></span>
            </div>

            <input type="submit" value="Proses">
            <input type="reset" name="" value="Reset">
        </form>
    </div>
    <?php
    echo $lastname . '  ' . $firstname . '  ' . $address . '  ' . $Magazines . '  ' . $duaration . '  ' . $paymen . '  ' . $gender;
    ?>
</body>

</html>