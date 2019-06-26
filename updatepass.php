<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Password</title>

    <link href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js">
    <style>
        h3{
            font-weight: bold;
        }
        label{
            font-weight: bold;
        }
        .col-md-4{
            margin-top: 10%;
            border-style: groove;
        }
    </style>

</head>
<body>

<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <h3 class="text-center">Change Password Here</h3>
        <form role="form" action="update.php" method="post">
            <div class="form-group">
                <label>New Password</label>
                <input type="password" class="form-control" name="pas1" required>
            </div>
            <div class="form-group">
                <label>Re-Enter New Password</label>
                <input type="password" class="form-control" name="pass2" required>
            </div>
            <button type="submit" class="btn btn-danger">Change Password</button>
        </form>
        <br>
    </div>
</div>




</body>
</html>