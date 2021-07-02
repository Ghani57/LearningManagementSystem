<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="veiwport" content="device-width", initial-scale=1, shrink-to-fit="no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- External CSS -->
  <link href="HomeStyles.css" rel="stylesheet" type="text/css">
  <link  href = "bootstrap/css/bootstrap.min.css"  rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.14.0-web/css/all.min.css">
	<!--External JavaScript File-->
  <link  href ="admin/materialize/css/materialize.min.css"  rel="stylesheet">
</head>
<body style="background-image: linear-gradient(to right, red,blue, purple, green)">
    <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img src="Images/logo.png" id="logo">CEP</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="AccessTasks.php">Assignments</a></li>
        <li><a href="badges.html"><?php
    session_start();

    if (isset($_SESSION['user'])) 
    {
          echo "<a href='#'>".$_SESSION['user']."</a></li>";
          echo "<li><a href='logout.php?logout'> Logout </a></li>";
        }
    else{
      echo "<a href='signin.php' style='color: blue; font-weight:900'>Sign In</a>";
      //header("Location:signin.php");
    }
        ?></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="BeforeResults.php">Assignments Results</a></li>
        <li class="tab"><a class="active" href="Staff.php">Faculty Staff</a></li>
        <li class="tab"><a href="BeforeCourses.php">Courses</a></li>
        <li class="tab"><a href="#test3">About Us</a></li>
        <li class="tab"><a href="signup.php">Create New Account</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">JavaScript</a></li>
  </ul>
  <br><br><br><br><br>

  <div class="contain" style="margin-top: -180px">
  <br><br><br><br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <h2>University of Engineering & Technology, Mardan</h2>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Images/UETM2.jpg" alt="UETMardan" style="width:100%;">
      </div>

      <div class="item">
        <img src="Images/uet2.png" alt="UETMardan" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="Images/uet3.png" alt="UETMardan" style="width:100%;">
      </div>

      <div class="item">
        <img src="Images/library.jpg" alt="UETMardan" style="width:100%;">
      </div>

      <div class="item">
        <img src="Images/lap.jpg" alt="UETMardan" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="briefView" style="background-color: blue; color: white">
 <u> <h4 style="text-align: center;">A brief View of UETM</h4></u>
<div class="row">
  <div class="col-md-6">
    <img src="Images/lab.png" style="height: 500px; width:100%">
    <a href="#"> <u><h5 style="color: pink;">Labs</u></h5></a>
    <p>Well furnished labs with proper equipments.These labs include Radar Labs, Solaris Labs, Advance Electronics Labs,ProgrammingLab, Data Science Lab, System and Design Lab, Final Year Project Labs, Postgraduate Lab, EmbeddedSystems Lab, Power Generation, Transmission and Distribution Analysis Labs, Advance Machinery Lab,Computer Labs, Communication Labs, Control Systems Labs, Advance Telephony and Various types ofexperimentation test beds as well as workshops</p>
  </div>
  <div class="col-md-6">
    <img src="Images/societies.png" style="height: 500px; width:100%">
    <a href="#"><u><h5 style="color: pink;">Socities</u></h5></a>
    <p>Different socities for fun.We have different societies which embed group dynamics among our students. Through these clubs and societies, the students learn team working, co-existence, adaptability, flexibility, collaboration, management, and enhancement of skills.</p>
  </div>
  <div class="col-md-6">
    <img src="Images/sports.png" style="height: 500px; width:100%">
    <a href="#"><u><h5 style="color: pink;">Sports & Games</u></h5></a>
    <p>The UET Mardan also offers entertainment through different games.A little good indulgence is always a good chill-out when one seriously has a jam-packed academic routine, and what could one ask for more when the indulgence is some healthy sports. UETM is always taking care of its people and therefore we reward our students with some sports events like Sports Hungama, Sports Gala and Mini Olympics. These events are surely a count-me-in kind of opportunities. The students rejoice the different sports and replenish their mental and physical health.</p>
  </div>
  <div class="col-md-6">
    <img src="Images/fac.png" style="height: 500px; width:100%">
    <a href="#"><u><h5 style="color: pink;">Facilities</u></h5></a>
    <p>UET Mardan, spreading over an area of 172 Kanals, is providing quality education. There are on-campus residence of staff and faculty, two boys hostels and 1 girls hostel that are situated inside campus premises with dedicated official caretakers as well as management staff.Moreover, the institute is surrounded by the agricultural lands of Mardan as well as the developed city and buildings, so students have an easy access to most of the outside university facilities as well. Furthermore, the University also has its own exclusive and brand new buses for daily commuting, recreational trips and study tours.
</p>
  </div>
</div>
</div>
<div class="row" style="background-color: #191a1a; color: white; padding: 20px">
<div class="col-md-4" style="border-right: 2px solid red;">
The University of Engineering & Technology Mardan (UET Mardan) was established on 7th March, 2018 by the Government of Khyber Pakhtunkhwa under the KP Universities Act. The University Campus is situated on main Charsada Road Mardan spreading over an area of 172 Kanals. Previously, the Campus had been operational since 2002 as one of the satellite campuses of UET Peshawar.
</div>

<div class="col-md-4" style="border-right: 2px solid red">
<h5 style="margin-top: -8px; text-align: center">Important Links</h5>
<ol style="list-style:none; margin-left: 70px">
<li><i class="fas fa-graduation-cap"></i><a href="#" style="color: white"> Admissions Section</a></li>
<li><i class="fas fa-bullhorn"></i></i><a href="#" style="color: white"> Announcents</a></li>
<li><i class="fas fa-project-diagram"></i><a href="#" style="color: white"> Projects</a></li>
<li><i class="fas fa-book"></i><a href="#" style="color: white"> Library</a></li>
<li><i class="fas fa-book-medical"></i><a href="#" style="color: white"> Health & Care Section</a></li>
<li><i class="fas fa-money-check-alt"></i><a href="#" style="color: white"> Free Structure</a></li>
<li><i class="fas fa-award"></i><a href="#" style="color: white"> Awards</a></li>

</ol>
</div>

<div class="col-md-4">
<h5 style="margin-top: -8px; text-align: center">Information</h5>
<ol style="list-style:none; margin-left: 70px; padding:">
<li><i class="fas fa-phone-alt"></i><a href="#" style="color: white"> +92-311-6665395</a></li>
<li><i class="fas fa-fax"></i><a href="#" style="color: white"> +92-349-9343390</a></li>
<li><i class="fa fa-envelope"></i><a href="#" style="color: white"> info@uetmardan.edu.pk</a></li>
<li><i class="fas fa-globe"></i><a href="#" style="color: white"> www.uetmardan.edu.pk</a></li>
<li><i class="fas fa-map-marker-alt"></i><a href="#" style="color: white"> Charsadda Road, 23200 Mardan Khyber Pakhtunkhwa, Pakistan</a></li>
</ol>
</div>

<div class="col-md-12" style="background-image: linear-gradient( to right, pink,purple);">

<h6 style="float: right; color: white;">&copy; 2021 <span style="color: yellow; font-weight: bold">UETM</span> All Rights Reserved. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Developed by <span style="color: yellow; font-weight: bold">Ghani Rehman</span></h6>
</div>
</div>
</body>
</html>
