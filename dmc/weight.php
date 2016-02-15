<?php
include("../include/connect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<form action="weightReport.php" method="post" enctype="multipart/form-data" name="form1">
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
  	<td><div align="center">ข้อมูลนักเรียนรายบุคคลจำแนกตามน้ำหนัก,ส่วนสูง<br><br></div></td>
  </tr>
<table border="0">
 <!--width="900" border="1" bordercolor="#000000" style="border-collapse:collapse;"-->
	<tr>
		<td><div align="right">โรงเรียน : </div></td>
		<td><input type="text" name="txtschool" id="" value=""/></td>
		<td>เลขประจำตัวนักเรียน : </td>
		<td><input type="text" name="txtstudentID" id="" value=""/></td>
	</tr>
  	<tr>
		<td>เลขประจำตัวประชาชน : </td>
		<td><input type="text" name="txtempID" id="" value=""/></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><div align="right">ชั้น : </div></td>
		<td><input type="text" name="txtclass" id="" value=""/></td>
		<td><div align="right">ห้อง : </div></td>
		<td><input type="text" name="txtroom" id="" value=""/></td>
	</tr>
	<tr>
		<td><div align="right">ชื่อ : </div></td>
		<td><input type="text" name="txtNstudent" id="" value=""/></td>
		<td><div align="right">นามสกุล : </div></td>
		<td><input type="text" name="txtLstudent" id="" value=""/></td>
	</tr>
	<tr>
		<td><div align="right">ช่วงน้ำหนัก : </div></td>
		<td><input type="text" name="txtbeginWeight" id="" value=""/> กก.</td>
		<td><div align="right">ถึง : </div></td>
		<td><input type="text" name="txtendWeight" id="" value=""/> กก.</td>
	</tr>
	<tr>
		<td><div align="right">ช่วงส่วนสูง : </div></td>
		<td><input type="text" name="txtbeginHeight" id="" value=""/> ซม.</td>
		<td><div align="right">ถึง : </div></td>
		<td><input type="text" name="txtendHeight" id="" value=""/> ซม.</td>
	</tr>
	<tr>
		<td colspan="4"><div align="center"><input type="submit" name="Submit" value="ค้นหาข้อมูล" /></div></td>
	</tr>
</table>
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
</html>