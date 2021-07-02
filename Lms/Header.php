<!DOCTYPE html>
<html lang="en">
<head>
<style>
.header{
	background-color: blue;
	width: 100%;
	padding: 15px;
	opacity: 0.9;
	border-radius: 12px 12px 12px 12px;
	margin-top: 20px;
	border-bottom: 2px solid yellow;
}
body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
a{
	color:white;
	font-size: 20px;
}
a:hover{
	color: white;
	font-size: 20px;
	font-weight: bold
}
ul{
	list-style:none;
	margin-top: -30px;
}
ul li{
	display: inline;
	padding-left: 30px;
}
#logo{
	height: 80px;
	width: 80px;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="header">
<h4 class="text-light" style="margin-top: 10px;"><img src="Images/logo.jfif" id="logo">University of Engineering & Technology <br>Mardan (LMS)</h4>
<ul style="float:right; color:white">
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="#">Contact Us</a></li>
<li><a href="whylms.php">Why UETM LMS?</a></li>
</ul>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
</body>
</html>