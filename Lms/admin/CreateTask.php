<?php
$conn=mysqli_connect("localhost","root","","uet");

if(isset($_REQUEST['message']))
{
    $Title = $_POST['courseTitle'];
    $message = $_POST['message'];
    $usersList = $_POST['emp'];
    $AssignedBy = $_POST['assignedBy'];

    foreach($usersList as $user){
        $query = "INSERT INTO `task` (`TaskId`,`CourseTitle`, `Task`, `UserEmail`, `AssignedBy`)
        VALUES ('','$Title', '$message', '$user', '$AssignedBy')";

        $res = mysqli_query($conn, $query);
    }
    if($res){
        echo "Message Sent!!!";
        header("Location:AssignTask.php");
    }
    else {
        echo "Sorry, Failed to send the data";
    }
}
?>