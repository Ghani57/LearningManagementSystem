<?php

$conn =mysqli_connect("localhost","root","","uet") or die("Can't connect with the database");

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$userName = $_POST['username'];
$role = $_POST['role'];
$ContactNbr = $_POST['Cnbr'];
$Password = $_POST['password'];
$Address = $_POST['address'];
$Designation = $_POST['designation'];
$file = $_POST['image'];

if(isset($_POST["submit"]))
{
	$file =addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
}

$sql="SELECT UserName from users WHERE UserName= '$userName'";
$sql1="SELECT Email from users WHERE Email= '$email'";

$checkemail = mysqli_query($conn, $sql1);

$fire = mysqli_query($conn,$sql);

 if(mysqli_num_rows($fire) > 0)
   {
    echo "Sorry, UserName isn't available!!!, Try Another";
   }
 else if(mysqli_num_rows($checkemail) > 0)
   {
	 echo "Email already exists!!!";
   }
 else
    {
		$query ="INSERT INTO users (FirstName,LastName,Email,UserName,Role,ContactNumber,Password,Address,Designation,Picture) VALUES ('{$firstName}', '{$lastName}' , '{$email}', '{$userName}','{$role}','{$ContactNbr}', '{$Password}', '{$Address}', '{$Designation}', '{$file}' )";
		$result =mysqli_query($conn, $query);

		header("Location: http://localhost/Lms/admin");
    }

?>