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

        $row = mysqli_fetch_assoc($result);
		if ($row['Role'] == '1') 
		{
			$_SESSION['user']=$_POST['email'];
			echo "<h1>Welcome <a href='#'>".$_POST['email']."</a></h1>";
			header("Location:Home.php");
		}
        else if($row['Role'] == '0')
        {
            header("Location:Alogin.php?Invalid= You are not an admin!!");
            // echo "You are not an admin!!!";
        }
		else
		{
			// if ($_POST['email']!=='Email' && $_POST['password']!='password') {
			header("Location:Alogin.php?Invalid= Email or Password is incorrect.Please Check!!");
		}
	}
}
?>