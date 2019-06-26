<?php //include 'secure.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <style>
        h3{
            font-weight: bold;
        }

        .col-md-4{
            border-style: groove;
            margin-top: 5%;
        }

    </style>
  </head>
<body>
<?php include 'navbar.php' ?>
<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <h2 class="text-center">Enter Member Details</h2>
        <form role="form" method="post" action="save.php">
            <div class="form-group">
                <label for="email">Enter Names</label>
                <input type="text" class="form-control" name="names">
            </div>
            <div class="form-group">
                <label for="pwd">Enter ID Number</label>
                <input type="text" class="form-control" name="idnum">
            </div>
            <div class="form-group">
                <label for="pwd">Enter Phone Number</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <button type="submit" class="btn btn-info btn-block">Register Member</button>
        </form>
        <br>
    </div>
</div>
</body>
</html>