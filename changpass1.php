<?php
include("include/connect.php");
session_start();
$newpass = $_POST['newpass'];
$newpass1 = $_POST['newpass1'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
	if ($_SESSION['ses_username']!="")
	{	if ($newpass == $newpass1){
		$sql_updatepass = "UPDATE tbschool SET password = '".$newpass."' where schoolid = '".$_SESSION['ses_username']."'";
		mysql_query($sql_updatepass) or die(mysql_error());
		$message = "เปลี่ยนรหัสผ่านสำเร็จ";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<meta http-equiv='refresh' content='0;URL=viewdata.php'>";
		}else{
			$message = "ใส่รหัสผ่านไม่ตรงกัน";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<meta http-equiv='refresh' content='0;URL=changpass.php'>";
		}
	}else{
		$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
	} 		
		
mysql_close($Conn);?>
</body>
</html>
