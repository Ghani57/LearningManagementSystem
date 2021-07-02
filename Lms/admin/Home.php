<!DOCTYPE html>
<html lang="en">
<head>

    <link href="indexStyles.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link  href ="bootstrap/css/bootstrap.min.css"  rel="stylesheet">
    <link  href ="materialize/css/materialize.min.css"  rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
</head>
<body>
<div class="col-md-12" id="header">
<nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">UET Mardan</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="AssignTask.php">Assign Task</a></li>
        <li><a href="badges.html"><?php
    session_start();

    if (isset($_SESSION['user'])) 
    {
          echo "<a href='#'>".$_SESSION['user']."</a></li>";
          echo "<li><a href='logout.php?logout'> Logout </a></li>";
        }
    else{
      echo "<a href='Alogin.php' style='color: blue; font-weight:900'>Sign In</a>";
      //header("Location:signin.php");
    }
        ?></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="CheckTasks.php">Check Assignments</a></li>
        <li class="tab"><a class="active" href="RegisterAdmin.php">Create a new admin account</a></li>
      </ul>
    </div>
  </nav>  
  <h1>Welcome to the Admin Panel</h1>
</body>
</html>