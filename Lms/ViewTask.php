<!DOCTYPE html>
<html lang="en">
<head>
<style>
#main{
    margin-top: 30px;
    outline: 4px double blue;
    padding: 10px;
}
#leftDiv{
    border-right: 2px solid white;
}
textarea{
    background: #00FFFF;
    border-bottom: 3px solid red;
    border-radius: 8px 8px 8px 8px ;
}
input[type=submit]{
    background: #6495ED;
    width: 20%;
    font-weight: bold;
    padding: 8px;
    color: white;
    border-radius: 8px 8px 8px 8px;
    float: right;
    margin-right: 15px;
}
input[type=submit]:hover{
    background: #00008B
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link  href = "bootstrap/css/bootstrap.min.css"  rel="stylesheet">
</head>
<body>
<?php
include_once "Header.php";
session_start();
$conn=mysqli_connect("localhost","root","","uet");

$Msg_Id = $_GET['Tid'];
$query = "Select * From task where `TaskId` = '".$Msg_Id."'";
    $res = mysqli_query($conn, $query);
    $count = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);
?>
<div class="container">
<div class="row" id="main">
    <div class="col-md-6" id="leftDiv">
    <h1 style="color:white">Assignment : </h1>
    <?php
    echo "<h3 style='color:white'>".$row['Task']."</h3>";
    ?>
    </div>
    <div class="col-md-6" id="RightDiv">
    <h3>Your Reply : </h3>
    <form action="SubmitTask.php" method="POST">
    <input type="hidden" name="MsgId" value="<?php echo $Msg_Id ?>">
    <input type="hidden" name="UserName" value="<?php echo $_SESSION['user'] ?>">
    <textarea rows="12" cols="70" name="reply" >
    </textarea>
    <input type="submit" name="submit" value="Turn in">
    </form>
    </div>
</div>
</div>
</body>
</html>