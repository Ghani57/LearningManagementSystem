<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link  href = "bootstrap/css/bootstrap.min.css"  rel="stylesheet">
</head>
<style>
form{
    width: 40%;
    margin-left:490px;
    outline: 2px solid white;
    margin-top: 15px;
    padding: 20px;
    color: white;
    box-shadow: 0px 2px 2px 4px red;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 7px;
  font-weight: bold;
  text-align:center;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
</style>
<body>
<?php
include_once("Header.php");
?>
<form action="insert.php" method="POST" enctype="multipart/form-data">
<h3>Create a new user acount</h3>
<div class="row">
    <div class="col-md-6">
    <label>First Name: </label>
    <input type="text" class="form-control" name="firstname">
    </div>
    <div class="col-md-6">
    <label>Last Name: </label>
    <input type="text" class="form-control" name="lastname">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <label>Email: </label>
    <input type="email" class="form-control" name="email">
    </div>
    <div class="col-md-6">
    <label>Username: </label>
    <input type="text" class="form-control" name="username">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <label>Role: </label>
    <input type="text" class="form-control" name="role" placeholder="1" value="1" disabled>
    </div>
    <div class="col-md-6">
    <label>Contact Number: </label>
    <input type="text" class="form-control" name="Cnbr">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <label>Password: </label>
    <input type="password" class="form-control" name="password">
    </div>
    <div class="col-md-6">
    <label>Address: </label>
    <input type="text" class="form-control" name="address">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <label>Designation: </label>
    <input type="text" class="form-control" name="designation">
    </div>
    <div class="col-md-6">
    <label>Picture: </label>
    <input type="file" class="form-control" name="image">
    </div>
</div>

    <input type="submit" class="form-control" name="submit" value="Sign Up">
    </form>
</body>
</html>