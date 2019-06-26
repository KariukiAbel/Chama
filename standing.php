<?php include 'secure.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Outstanding</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
</head>
<body>
<?php include 'navbar.php' ?>
<div class="container">

    <table class="table" id="example">
        <thead>
        <tr>
            <th>NAMES</th>
            <th>NATIONAL ID</th>
            <th>AMOUNT</th>
            <th>DATE OF BORROWING</th>
            <th>LOAN STATUS</th>
        </tr>
        <tbody>
        <?php
        include 'connect.php';
        //$db=mysqli_connect("localhost","root","","chama_gamma")
        $sql="SELECT Members.Name, Members.ID_Number, Loans.Amount, Loans.Borrow_Date,Loans.status FROM Members 
JOIN Loans ON Members.ID_Number=Loans.member_id
";
        $result=mysqli_query($db,$sql);
        while($row =mysqli_fetch_row($result))
        {
            echo "<tr>";
            echo "<td>$row[0]</td>";
            echo "<td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "<td>$row[3]</td>";
            echo "<td>$row[4]</td>";
            echo "</tr>";
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