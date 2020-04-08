<!DOCTYPE html>
<html>

<head>
    <title>Supcription </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <p>When you submit the form, a function is triggered which alerts some text.</p>

    <form action="/action_page.php" onsubmit="myFunction()">
        Enter name: <input type="text" name="fname">
        <input type="submit" value="Submit">
    </form>
    <div class="mt-3">

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <!-- Modal show Magazines -->
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Subcription Order </h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <p> Do you want to Order : <?php echo $Magazines . ' '; ?>
                            magazines for : </p>
                        <p> And pay with : ></p>


                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" id="btn-Cancel-Magazines" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="button" id="btn-info" class="btn btn-success" data-dismiss="modal">OK</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
    <script>
        function myFunction() {
          $("#myModal").modal();
        }
    </script>

</body>

</html>