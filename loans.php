<?php /*include 'secure.php'*/?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Loans</title>
    <link href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js">
    <style>
        h3{
            font-weight: bold;
        }
        .col-md-4{
            border-style: groove;
            margin-top: 7%;
        }
        label{
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php include 'navbar.php' ?>


<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <h3 class="text-center">Issue loan</h3>
        <form role="form" action="process.php" method="post">


            <div class="form-group">
                <label>ID NUMBER</label>
                <input type="text" class="form-control" name="idnum" required>
            </div>
            <div class="form-group">
                <label>LOAN AMOUNT</label>
                <input type="text" class="form-control" name="amount" required>
            </div>
            <button type="submit" class="btn btn-danger btn-block">Issue loan</button>
        </form>
        <br>
    </div>
</div>



</body>
</html>
</body>
</html>