<!DOCTYPE html>
<html>
<head>
	<title>Admin LogIn</title>
		<link rel="stylesheet" type="text/css" href="mystyles.css">
		<meta charset="utf-8">
	<meta name="veiwport" content="device-width", initial-scale=1, shrink-to-fit="no">
	<link  href = "bootstrap/css/bootstrap.min.css"  rel="stylesheet">
	<!-- External CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.14.0-web/css/all.min.css">
	<!--External JavaScript File-->
	<script src="bootstrap/js/javascript.js"></script>
	<style type="text/css">
	input[type=email] {
  width: 100%;
  background-color: #f5f5f0;
  color: green;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  border-bottom: 4px solid green;
}
span{
	cursor: pointer;
	position: absolute;
	margin-top: -45px;
	margin-left: 350px;
	opacity: 0.5;
}
.fa{
	font-size: 20px;
	color: #7a797e;
}
input[type=password] {
  width: 100%;
  background-color: #f5f5f0;
  color: green;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
}
input[type=text] {
  width: 100%;
  background-color: #f5f5f0;
  color: green;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
		form{
			
			text-align: center;
			outline: 2px solid white;
			margin-top: 20px;
			padding: 20px;
			width: 500px;
			margin-left: 320px;
			height: 700px;
		}
		a{
			font-size: 12px;
			color: white
		}
		a:hover{
			font-size: 15px;
			color: white
		}
		header{
			width: 100%;
			height: 350px;
		}
	</style>
</head>
<body>
		<?php 
include_once'Header.php';
	 ?>
	 <div class="container">
	<div class="row">
		<div class="col-md-12">
<form class="form-group col-md-6" method="POST" action="adminLogin.php">
	<header>
		<h4 style="color: white"><img src="Images/2.JFIF" style="width:100%; height: auto;"></h4><br>
	</header>
	
	<p style="color:white; margin-top:5px">Please sign in with your UET Mardan Admin account</p><br>
	<?php  
if (@$_GET['Empty']==true) {
	?>
	<div class="alert-light text-danger">
		<?php
		echo $_GET['Empty'] ?>
	</div>
	<?php 
	} ?>
	<?php
	if (@$_GET['Invalid']==true) {
	?>
	<div class="alert-light text-danger">
		<?php
		echo $_GET['Invalid'] ?>
	</div>
	<?php 
	} ?>
	
<input type="Email" name="email" placeholder="Please enter your email address" class="form-control"><br>
  	
<input class="input-field" type="password" placeholder="Password" name="password" id="myInput">
       <span>
       	<i class="fa fa-eye" area-hidden="true" id="eye" onclick="myFunction()"></i>
       </span>
       
	<input type="submit" name="submit" value="Log In">
<script type="text/javascript">

var state = false;
function myFunction(){
	if(state){
		document.getElementById("myInput").setAttribute("type","password");
		state=false;
	}
	else{
		document.getElementById("myInput").setAttribute("type","text");
		state=true;
	}
}
</script>
	<a href="RegisterAdmin.php" style="float: right;">Not Registered ? Sign Up</a>
</form>
</div>
</div>
</div>
</body>
</html>