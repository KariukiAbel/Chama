<?php include 'secure.php'?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Repayment</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <style>
        h3,label{
            font-weight: bold;
        }
        .col-md-4{
            border-style: groove;
            box-shadow: 10px 10px grey;
            margin-top: 7%;
        }

    </style>
</head>
<body>
<?php include 'navbar.php' ?>


<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <h3 class="text-center">Repay loan</h3>
        <form role="form" action="repay_loan.php" method="post">


            <div class="form-group">
                <label>ID NUMBER</label>
                <input type="text" class="form-control" name="idnum" required>
            </div>
            <div class="form-group">
                <label>LOAN AMOUNT</label>
                <input type="text" class="form-control" name="amount" required>
            </div>


            <button type="submit" class="btn btn-danger btn-block">Update loan</button>
        </form>
        <br>
    </div>
</div>



</body>
</html>
</body>
</html>