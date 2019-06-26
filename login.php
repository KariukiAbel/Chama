<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    <style>
        h3{
            font-weight: bold;
        }
.col-md-offset-4{
    border-style: groove;
    margin-top: 15%;
}
        label{
            font-weight: bold;
        }
    </style>
</head>
<body>



<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <h3 class="text-center">Sign in Here</h3>
        <form role="form" action="process_login.php" method="post">
            <div class="form-group">
                <label>EMAIL</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label>PASSWORD</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-danger btn-block">Log In</button>
            <br>
        </form>
        <a href="updatepass.php"> Forgot Password</a>
    </div>
</div>



</body>
</html>
</body>
</html>