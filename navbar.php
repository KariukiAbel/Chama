<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="chama.php">Chama Management System</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li ><a href="index.php">Home</a></li>
                <li><a href="members.php">Members</a></li>
                <li><a href="loans.php">Loans</a></li>
                <li><a href="repay.php">Repayment</a></li>
                <li><a href="standing.php">Outstanding</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="process_login.php"><span class="glyphicon glyphicon-user">
                        </span><?php echo $_SESSION['names']?></a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>