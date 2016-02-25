<?php
include("../include/connect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Real Time Data Managment</title>
<style type="text/css">
<?php include("include/button.css");?>
<!--
.style2 {font-size: 14px}
-->

</style>
</head>
<body>
<form action="../dmc/phpCSVMySQLUpload.php" method="post" enctype="multipart/form-data" name="form1">
<div align="center">
<?php
		if ($_SESSION['ses_username']!=""){	
?> 
<table width="900"  border="0">
   <tr>
    <td><?php include("header.php"); ?></td>
  </tr>
  <tr>
  	<td><?php include("cssmenu/index.html");?><br><br></td>
  </tr>
  <tr>
  	<td><div align="center">นำเข้าข้อมูลนักเรียนรายบุคคล<br><br></div></td>
  </tr>
<table border="1">
  <tr>
  	<td><div align="center"><input name="fileCSV" type="file" id="fileCSV">
  		<input name="btnSubmit" type="submit" id="btnSubmit" value="Upload"></div></td>
  </tr>
</table>
<tr>
    <td height="59"><br>- ไฟล์ที่อัพโหลดต้องนามสกุล .csv ดาวน์โหลดได้จาก ที่นี่ และ Encoding เป็น UTF-8</td>
 </tr>
<tr>
    <td height="59"><br><br><br><br><br><br><br><br><?php include ("footer.php"); ?></td>
</tr>
</table>
<?php
}else{
		$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
		} 
mysql_close($Conn); 
?>
</div>
</form>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>