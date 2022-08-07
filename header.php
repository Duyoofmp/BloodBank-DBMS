<nav class="navbar navbar-inverse btn btn-success">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Team Hackers Blood Donation</a>
    </div>
    <?php if (isset($_SESSION['hid'])) { ?>
    <ul class="nav navbar-nav">
      <li class="active"><a href="bloodinfo.php">Add Blood Info</a></li>
      <li><a href="bloodrequest.php">Blood Request</a></li>
      <li><a href="abs.php">Available Blood Samples</a></li>
      <li class="nav-item">
                <a href="hprofile.php?id=<?php echo $_SESSION['hid']; ?>" class="nav-link btn font-weight-bold"><img src="image/hospital.png" width="15" height="15" class="rounded-circle"><mark><?php echo $_SESSION['hname']; ?></mark></a>
            </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
    <?php } elseif (isset($_SESSION['rid'])) { ?>
        <ul class="nav navbar-nav">
      <li class="active"><a href="sentrequest.php">Sent Blood Request</a></li>
      <li><a href="abs.php">Available Blood Samples</a></li>
      <li class="nav-item">
                <a href="rprofile.php?id=<?php echo $_SESSION['rid']; ?>" class="nav-link btn font-weight-bold" href="#"><img src="image/user.png" width="15" height="15" class="rounded-circle"> <mark><?php echo ' '.$_SESSION['rname']; ?></mark></a>
            </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
    <?php }  else { ?>
        <ul class="nav navbar-nav">
      <li class="active"><a href="abs.php">Available Blood Samples</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    <?php } ?>
  </div>
</nav>



