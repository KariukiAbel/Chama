<?php
//repay_loan
extract($_POST);
include 'connect.php';
//$db = mysqli_connect("localhost","root","","chama_omega");

$sql= "insert into Repays (natid,amount) values ('$idnum',$amount)";

mysqli_query($db ,$sql) or die( mysqli_error($db));
echo "Updated loan<br>";

//repay loan
$sql= "select Amount from Loans where member_id='$idnum' and status='pending'";

$result= mysqli_query($db ,$sql) or die( mysqli_error($db));
$row = mysqli_fetch_row($result);
$loan = $row[0];
echo "Loan taken is $loan ";


//$sql2="select sum(amount) from Repays where natid='$idnum'";
//$mresult=mysqli_query($db,$sql2);
//echo $mresult;
////All repayment
$sql= "select sum(amount) from Repays  where natid= '$idnum'";

$result= mysqli_query($db ,$sql) or die( mysqli_error($db));
$payments=$result;
$row = mysqli_fetch_row($result);
$loan = $row[0];
echo "Total payments is Ksh $payments ";
if($loan>$payments)
{
    $bal = $loan -$payments;
    echo "Your loan balance is Ksh $bal ";
}
else
{
    echo "loan fully repaid ";
    $sql= "update Loans set status='cleared' where member_id='$idnum'";

    $result= mysqli_query($db ,$sql) or die( mysqli_error($db));
    header("location:standing.php");
}


