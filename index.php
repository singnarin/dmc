<?php
include("include/connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Real Time Data Managment</title>
<style type="text/css">
body{
  background: url('images/background.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; 
  }
  .profile-img {
    width: 70px;
    height: 70px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
  }
  .bg
  {
    background-color: #FFFFFF;
  }
</style>
</head>
<body>
<div class="container">
 <div class="bg">
    <div class="row">
      <div class="span12"><?php include("header.php"); ?></div>
      <div class="span4 offset4 well">
       <img class="profile-img" src="images/user.png" alt="">
        <legend><div align="center">เข้าสู่ระบบ</div></legend>
          <form action="checklogin.php" method="post">
            <input type="text" id="loginid" class="span4" name="loginid" placeholder="Username"><i class="glyphicon glyphicon-ok"></i>
            <input type="password" id="password" class="span4" name="password" placeholder="Password">  
            <button type="submit" name="submit" class="btn btn-info btn-block">เข้าสู่ระบบ</button>
          </form>    
      </div>
    </div>
 </div>
 <?php include 'include/footer.php';?>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
