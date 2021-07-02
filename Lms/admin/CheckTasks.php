<!DOCTYPE html>
<html lang="en">
<head>
<style>
h1{
	text-align: center;
	color: white;
	text-shadow: 2px 4px 4px yellow;
}
table{
	margin-top: -50px;
	text-align: center
}
table tr td {
	color: white
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Tasks</title>
    <link  href ="bootstrap/css/bootstrap.min.css"  rel="stylesheet">
</head>
<body>
<?php
include_once "Header.php";
$conn = mysqli_connect("localhost","root","","uet") or die("Can't connect with the database");

$query = "SELECT *FROM taskreply";

$result = mysqli_query($conn , $query);

?>

<h1>Submitted Tasks</h1>
<table class="table table-striped table-hover table-bordered">
	<tr class="bg-success" style="color: white">
		<th>ReplyID</th>
		<th>SubmittedBy</th>
		<th>Reply</th>
		<th>Date</th>
        <th>Action</th>
	</tr>
<?php
if (mysqli_num_rows($result) > 0) {

	while ($row = mysqli_fetch_assoc($result)) {
?>
<tr><td><?php
		echo $row['ReplyId'];
		echo "  ";?></td>
		<td><?php
		echo $row['SubmittedBy'];
		echo "  ";?></td>
		<td><?php
		echo $row['Reply'];
		echo "  ";?></td>
		<td><?php
		echo $row['Date'];
		echo "  ";?></td>
		
		<td>
			<a href="FeedBack.php?Fid=<?php echo $row['ReplyId']; ?>" style="color: yellow; text-decoration: none">Send FeedBack</a>
		</td>
	</tr>
<?php
		echo "<br>";

	} }
?>
</table>

</body>
</html>