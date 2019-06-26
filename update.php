<?php
/**
 * Created by PhpStorm.
 * User: nabesh
 * Date: 6/18/19
 * Time: 9:16 AM
 */
extract($_POST);
include 'connect.php';
include  'login.php';
$sql1 = "select * from staff where Email='$email'";
//echo $sql;
$mresult=mysqli_query($db, $sql1) or die (mysqli_error($db));
$count1 = mysqli_num_rows($mresult);
if($count1 == 1) {

    if ($pass1 == $pass2) {
        $sql2 = "update staff set Password='$pass2' where Email='$email'";
        $res=mysqli_query($db,$sql2);
        echo "<script>
confirm('Do you want to change password');
alert('Password changed successfully');
</script>";
        header("location: login.php");
    }
    echo "<script>

</script>";
}