<?php
extract($_POST);
include 'connect.php';
//$db = mysqli_connect("localhost","root","","chama_omega");
$sql = "select * from staff where Email='$email' and Password='$password'";
$result=mysqli_query($db, $sql) or die (mysqli_error($db));
$count = mysqli_num_rows($result);
if($count == 1)
{
    //success
    $row = mysqli_fetch_row($result);
    $names = $row[1];
    session_start();
    $_SESSION['names']= $names;
    $_SESSION['email']= $email;
    /*echo json_encode($password);*/

    header("location:index.php");
}
else
{
    echo "Wrong username or password";
}