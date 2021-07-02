<?php
session_start();
$conn=mysqli_connect("localhost","root","","uet");

if(isset($_POST['submit'])) 
{
	if (empty($_POST['email']) || empty($_POST['password'])) {
		
		header("Location:signin.php?Empty= Please fill out all the Fields!!");
	}
	else
	{
		$query="SELECT * From users where Email ='".$_POST['email']."' and password ='".$_POST['password']."'";
		$result=mysqli_query($conn,$query);

		if (mysqli_fetch_assoc($result)) 
		{
			$_SESSION['user']=$_POST['email'];
			
			//echo "Welcome <a href='#'>".$_POST['email']."</a>";
			header("Location:index.php");
		}
		else
		{
			if ($_POST['email']!=='Email' && $_POST['password']!='password') {
			header("Location:signin.php?Invalid= Email or Password is incorrect.Please Check!!");
		}
		}
	}
}
?>