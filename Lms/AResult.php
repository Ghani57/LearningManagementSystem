<!DOCTYPE html>
<html lang="en">
<head>
<style>
h1{
	text-align:center;
	color: white;
}
table{
	text-align:center;
}
table tr td{
	color: white
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href = "bootstrap/css/bootstrap.min.css"  rel="stylesheet">
    <title>Assignments Results</title>
</head>
<body>
<?php
include_once "Header.php";
session_start();
$conn = mysqli_connect("localhost","root","","uet") or die("Can't connect with the database");

$query = "SELECT *FROM taskfeedback";

$result = mysqli_query($conn , $query);

                ?>

<h1><u>Assignments Result</u></h1>
<table class="table table-striped table-hover table-bordered bg-primary">
	<tr class="bg-info" style="color: white">
		<th>Course Title</th>
		<th>Assignment Number</th>
		<th>Student's Email </th>
		<th>Points</th>
	</tr>
<?php
if (mysqli_num_rows($result) > 0) {

	while ($row = mysqli_fetch_assoc($result)) {
?>
<tr><td><?php
		echo $row['CourseTitle'];
		echo "  ";?></td>
		<td><?php
		echo $row['FeedBackId'];
		echo "  ";?></td>
		
		<td><?php
		echo $_SESSION['user'];
		echo "  ";?></td>
		<td><?php
		echo $row['FeedBack'];
		echo "  ";?></td>
		
	</tr>
<?php
		echo "<br>";

	} }

	else {
		?>
		<h1 style="color: red">No Record Found!!! </h1>
		<?php
	}
?>
</table>
</body>
</html>