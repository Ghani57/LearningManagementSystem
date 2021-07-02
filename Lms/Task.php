<!DOCTYPE html>
<html lang="en">
<head>
<style>
table{
	text-align: center
}
table tr td{
	color: white;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link  href = "bootstrap/css/bootstrap.min.css"  rel="stylesheet">
</head>
<body>

<?php
include_once "Header.php";
session_start();
$conn =mysqli_connect("localhost","root","","uet") or die("Can't connect with the database");

$query = "SELECT *FROM task where `UserEmail` ='".$_SESSION['user']."' ";

$result = mysqli_query($conn , $query);

?>

<table class="table table-striped table-hover table-bordered">
	<tr class="bg-success" style="color: white">
		<th>Course Title</th>
		<th>Task</th>
		<th>Student's Email</th>
		<th>Assigned By</th>
		<th>Date</th>
		<th>Action</th>
	</tr>
<?php

if (mysqli_num_rows($result) > 0) {

	while ($row = mysqli_fetch_assoc($result)) {
?>
<tr><td><?php
		echo $row['CourseTitle'];
		echo "  ";?></td>
		<td><?php
		echo substr($row['Task'],0,15).".....";
		echo "  ";?></td>
		<td><?php
		echo $row['UserEmail'];
		echo "  ";?></td>
		<td><?php
		echo $row['AssignedBy'];
		echo "  ";?></td>
		<td><?php
		echo $row['Date'];
		echo "  ";?></td>
		<td>
			<a href="ViewTask.php?Tid=<?php echo $row['TaskId']; ?>">View Assignment</a>
		</td>
	</tr>
<?php
		echo "<br>";

	} }
?>
</table>

</body>
</html>