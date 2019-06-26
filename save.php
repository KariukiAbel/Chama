<?php
extract($_POST);
include 'connect.php';
//$db = mysqli_connect("localhost","root","","chama_omega");
$msql="select * from Members where ID_Number='$idnum'";
$query=mysqli_query($db,$msql);
$count=mysqli_num_rows($query);
if ($count == 0){

    $sql= "INSERT INTO Members (`ID`, `Name`, `ID_Number`, `Phone_Number`) VALUES(null,'$names','$idnum','$phone')";

    mysqli_query($db ,$sql);
//redirect
    header("location:members.php");
}
else{
    echo "<script>alert('Member already exists..!!')</script>";
    header("location:index.php");
}
