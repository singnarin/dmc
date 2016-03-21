<?php
include("include/connect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<title>Real Time Data Managment</title>
<style type="text/css">
body{
		background: url('images/1970022.jpg') no-repeat center center fixed; 
	}
<?php include("include/button.css");?>
<!--
.style2 {font-size: 14px}
-->
</style>
</head>

<body>
<?php

if ($_SESSION['ses_username']!=""){	
	$schoolID = $_SESSION['ses_username'];

if ($_FILES["filUpload"]["error"]>0){
	$message = "ยังไม่ได้เลือกไฟล์ หรือเกิดข้อพิดพลาด โปรดตรวจสอบ";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
}else{

	$temp = explode(".", $_FILES["filUpload"]["name"]);
	$newfilename = $schoolID . '.' . end($temp);

move_uploaded_file($_FILES["filUpload"]["tmp_name"],'/var/www/dmc/fileUpload/'.$newfilename); // Copy/Upload CSV

mysql_query("insert into file (schoolid, filename) values ('$schoolID', '$newfilename')") or die (mysql_error());
$message = "ดำเนินการเสร็จเรียบร้อย";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=index1.php'>";
}
}else{
		$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
		} 
?>
</body>
</html>