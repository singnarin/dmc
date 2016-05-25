<?php
include("include/connect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<title>Real Time Data Managment</title>
<style type="text/css">
body{
	background: url('images/background.jpg') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; 
  }
<!--
.style2 {font-size: 14px}
-->
.bg
  {
    background-color: #FFFFFF;
  }

</style>
</head>

<body>
<center>
<?php
      if ($_SESSION['ses_username']!=""){ 
?>
<div class="container">
    <div class="row">
      <div class="span12"><img src="images/header.jpg"></div>
    </div>
    <div class="row">
      <div class="span3"><?php include 'include/navbar.php';?></div>
      <div class="span9"><img src="images/student.jpg"></div>
    </div>
</div>
<div class="container">
<div class="row">
      <div class="span12"><?php include 'include/footer.php';?></div>
</div>
</div>
<?php
      }else{
        $message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
      } 
mysql_close($Conn); 
?>
</center>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
