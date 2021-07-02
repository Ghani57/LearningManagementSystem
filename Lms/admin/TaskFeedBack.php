<?php
$conn =mysqli_connect("localhost","root","","uet") or die("Can't connect with the database");

$FeedBackid = $_POST['FeedBackId'];
$Title = $_POST['CourseTitle'];
$FeedBack = $_POST['feedback'];
$query ="INSERT INTO TaskFeedback (FeedBackId,CourseTitle,FeedBack) VALUES ('{$FeedBackid}', '{$Title}' , '{$FeedBack}')";
$result =mysqli_query($conn, $query);

		header("Location: http://localhost/Lms/admin");
?>