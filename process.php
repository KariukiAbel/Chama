<?php
extract($_POST);
include 'connect.php';
//$db = mysqli_connect("localhost","root","","chama_omega");
$sql = "select * from Members where ID_Number='$idnum' ";

$result=mysqli_query($db, $sql) or die (mysqli_error($db));
$count = mysqli_num_rows($result);

$sql2 ="select * from Loans where member_id='$idnum' and status='pending'";
$result2=mysqli_query($db, $sql2) or die (mysqli_error($db));
$count2 = mysqli_num_rows($result2);

if($count == 1 and $count2 == 0)
{
    $sql3="insert into Loans (member_id,amount) values ('$idnum',$amount)";
    mysqli_query($db,$sql3);
    echo "successfully processed your loans of $amount";
    header("location: standing.php");
}
else
{
    echo "You either have a loan already or you are not registered";
}
