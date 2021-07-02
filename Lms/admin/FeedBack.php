<!DOCTYPE html>
<html lang="en">
<head>
<style>
table{
    tex-align: center;
    margin-left: 450px;
    margin-top: 20px;
    border: 4px double white;
    width: 50%;
}
table th{
    padding: 10px;
    text-align: center;
    color: white;
    border: 2px solid white;
}
table td{
    padding: 10px;
    text-align: center;
    color: white;
    border: 2px solid white;
}
input[type="text"]{
    color: red;
    background: yellow;
    border: none;
    border-bottom: 2px solid red;
    font-weight: bold;
    width: 100%
}
input[type="text"]:focus{
    color: red;
    background: black;
    border: none;
    border-bottom: 2px solid red;
    font-weight: bold;
    width: 100%
}
input[type="submit"]{
    background: green;
    color: white;
    padding: 8px;
    font-weight: bold;
}
input[type="submit"]:hover{
    background: green;
    box-shadow: -2px 0px 1px 1px black;
    color: white;
    padding: 8px;
    font-weight: bold;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Feedback</title>
    <link  href ="bootstrap/css/bootstrap.min.css"  rel="stylesheet">
</head>
<body>
<?php
include_once "Header.php";
$conn=mysqli_connect("localhost","root","","uet");

$FeedBackId = $_GET['Fid'];
?>
<table>
<form action="TaskFeedBack.php" method="POST">
    <input type="hidden" name="FeedBackId" value="<?php echo $FeedBackId ?>">
    <tr>
    <th>Course Title</th>
    <th>Feedback</th>
    </tr>
    <tr>
    <td>
    <input type="text" name="CourseTitle" placeholder="Please Enter the Course Title">
    </td>
    <td>
    <input type="text" name="feedback" placeholder="Please Enter your feedback"> 
    </td>
    </tr>
    <tr >
    <td colspan=2>
    <input type="submit" name="submit" value="Send FeedBack">
    </td>
    </tr>
</form>
</table>
</body>
</html>