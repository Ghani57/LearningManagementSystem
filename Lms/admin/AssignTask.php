<!DOCTYPE html>
<html lang="en">
<head>
<style>
.container{
    margin-top: 20px;
    outline: 2px solid white;
    padding: 20px;
    color: white
}
#leftbox{
    border-right: 2px solid white;
}
#leftbox h4{
    text-align: center
}
input[type="text"]{
    background: green;
    color: white;
}
::placeholder{
    color: white;
    opacity: 0.9;
    font-weight: bold
}
textarea{
    background: green;
    color: white;
}
input[type="submit"]{
    background: blue;
    color: white;
    margin-left: 500px;
    width: 20%;
    margin-top: 10px;
    padding: 10px;
    font-size: 25px;
}
input[type="submit"]:hover{
    background: darkblue;
    box-shadow: 0px 0px 1px 1px black;
    color: white;
    margin-left: 500px;
    width: 20%;
    margin-top: 10px;
    padding: 10px;
    font-size: 25px;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Task</title>
    <link  href ="bootstrap/css/bootstrap.min.css"  rel="stylesheet">
</head>
<body>
<?php
include_once "Header.php";
$conn=mysqli_connect("localhost","root","","uet");
$query = "Select *from users where `Role` = '0' ";
$res= mysqli_query($conn, $query);
?>
<div class="container">
<div class="row">
    <div class="col-md-6" id="leftbox"> 
    <h4>Select the students and Course Title for each student </h4>
    <?php
    while($row = mysqli_fetch_array($res))
    {
    ?>
    <form action="CreateTask.php" method="POST">
    <input type="text" name="courseTitle" placeholder="Course Title">
    <div class="checkbox">
        <label>
            <input type="checkbox" name="emp[]" value="<?php echo $row['Email']; ?>">
            <?php echo $row['UserName']; ?>
    </div>
<?php } ?>
    </div>
<div class="col-md-6" id="msgArea">
</label>
<h4>Task Instructions/Questions</h4>
    <textarea cols="50" rows="10" name="message">
    </textarea>
    <br>
    <input type="text" name="assignedBy" placeholder="AssignedBy">
</div>
    <input type="submit" name="submit" value="Assign Task">
</div>
</form>
</div>
</body>
</html>