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
		background: url('images/1970022.jpg') no-repeat center center fixed; 
	}
<!--
.style2 {font-size: 14px}
-->
</style>
</head>

<body>
<center>
  <table width="900"  border="0">
    <tr>
      <td><?php include("header.php"); ?></td>
    </tr>
    <tr>
      <td><br><div align="center"><font color="White"><h4>เข้าสู่ระบบ</h4></font></div></td>
    </tr>
    <tr>
      <td><form action="checklogin.php" method="post"><div align="center"><table width="529" border="0">
        <tr>
          <td width="103"><font color="White"><h4>รหัสโรงเรียน</h4></font></td>
          <td width="200">:
            <input class="input-large" placeholder="เช่น 5601_ _ _ _" type="text" name="loginid" size="30" /></td>
          <td width="130"><span class="style2"></span></td>
        </tr>
        <tr>
          <td><font color="White"><h4>รหัสผ่าน</h4></font></td>
          <td>:
            <input class="input-large" type="password" name="password" size="30" /></td>
          <td><span class="style2"></span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><div align="center"><input class="btn btn-primary" type="submit" value=" เข้าสู่ระบบ " /></div></td>
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
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
