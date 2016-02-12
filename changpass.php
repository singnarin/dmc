<?php
include("include/connect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Real Time Data Managment</title>
<style type="text/css">
<!--
.style2 {font-size: 14px}
-->
</style>
</head>

<body>
	<?php
	if ($_SESSION['ses_username']!="")
	{	
	?>
<center>
  <table width="900"  border="0">
    <tr>
      <td><?php include("header.php"); ?></td>
    </tr>
    <tr>
      <td><br><br><br>
      <div align="center">เปลี่ยนรหัสผ่าน</div>
      <br></td>
    </tr>
    <tr>
      <td><form action="changpass1.php" method="post"><div align="center"><table width="529" border="0">
        <tr>
          <td width="188">ใส่รหัสผ่านใหม่</td>
          <td width="256">:
            <input type="password" name="newpass" size="30" /></td>
          <td width="71">&nbsp;</td>
        </tr>
        <tr>
          <td>ใส่รหัสผ่านใหม่อีกครั้ง</td>
          <td>:
            <input type="password" name="newpass1" size="30" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="center">
		  <input type="submit" value="เปลี่ยนรหัสผ่าน" />
		  <input type="button" name="Button" value="ยกเลิก" onClick="window.location.href='viewdata.php'">
		  
          </div></td>
          <td>&nbsp;</td>
        </tr>
      </table>
      </div></form></td>
    </tr>
    <tr>
      <td height="125">&nbsp;</td>
    </tr>
    <tr>
      <td height="59"><?php include ("footer.php"); ?></td>
    </tr>
  </table>
</center>
<?php
}else{
	$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
} 		
		?>
</body>
</html>
