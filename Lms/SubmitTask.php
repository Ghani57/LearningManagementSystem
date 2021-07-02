<?php
$conn =mysqli_connect("localhost","root","","uet") or die("Can't connect with the database");

$ReplyId = $_POST['MsgId'];
$User = $_POST['UserName'];
$TaskReply = $_POST['reply'];
$query ="INSERT INTO taskreply (ReplyId,SubmittedBy,Reply) VALUES ('{$ReplyId}', '{$User}' , '{$TaskReply}')";
$result =mysqli_query($conn, $query);

		header("Location: http://localhost/Lms");

?>