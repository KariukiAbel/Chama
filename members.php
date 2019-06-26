<?php //include 'secure.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Members</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
</head>
<body>
<?php include 'navbar.php' ?>
<?php
include 'connect.php';
//$db = mysqli_connect("localhost","root","","chama_omega");

$sql= "select count(*) from Members";

$result = mysqli_query($db ,$sql);
$row = mysqli_fetch_row($result);
$number = $row[0];
echo "<h2> We have $number users</h2>"

?>

<div class="container">

    <table class="table" id="example">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAMES</th>
            <th>NATIONAL ID NUMBER</th>
            <th>MOBILE</th>
            <th>Date and time of Regitration</th>
        </tr>
        <tbody>
        <?php
//        $db=mysqli_connect("localhost","root","","chama_omega");
        $sql="select * from Members";
        $result=mysqli_query($db,$sql);
        while($row =mysqli_fetch_row($result))
        {
            echo"<tr>";
            echo"<td>$row[0]</td>";
            echo"<td>$row[1]</td>";
            echo"<td>$row[2]</td>";
            echo"<td>$row[3]</td>";
            echo"<td>$row[4]</td>";
            echo"</tr>";
        }
        ?>

        </tbody>
        </thead>


    </table>

</div>

<link rel="stylesheet" href="bootstrap/css/dataTables.css"/>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/dataTables.js"></script>
<script>
    $("#example").DataTable();
</script>
</body>
</html>