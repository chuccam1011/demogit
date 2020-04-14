
<?php 
session_start();

if(isset($_POST['login'])){
    $_SESSION['name']=$_POST['fname'];
    $_SESSION['pass']=$_POST['fpass'];
    header("location:index2.php");
}

?>

<!DOCTYPE html>
<html>

<head>
<title>login</title>
</head>

<body>

    <form name="myForm" action="" onsubmit="return validateForm()" method="post">
        Name: <input type="text" name="fname">
        Pass: <input type="password" name="fpass">

        <input type="reset" name="reset" value="Resest">
        <input type="submit" name="login" value="Login">
    </form>

    <script>
        function validateForm() {
            var name = document.forms["myForm"]["fname"].value;
            var pass = document.forms["myForm"]["fpass"].value;

            if (name == "") {
                alert("Name must be filled out");
                return false;
            }
            if (pass == "") {
                alert("Pass must be filled out");
                return false;
            }
        }
    </script>
</body>

</html>