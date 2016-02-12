<?php
include("include/connect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Real Time Data Managment</title>
</head>

<body><div align="center">
<?php
	if ($_SESSION['ses_username']!="")
	{	
		if($_SESSION['ses_username']  == 56010000){  
			echo "<meta http-equiv='refresh' content='0;URL=viewstatus.php'>";
		}else{ 
			$check_status = mysql_query("SELECT * FROM tbstatus WHERE schoolid = '".$_SESSION['ses_username']."'");
			$num_status = mysql_num_rows($check_status);
			if($num_status <=0) {
				echo "<meta http-equiv='refresh' content='0;URL=adddata.php'>";
			} else {
				echo "<meta http-equiv='refresh' content='0;URL=viewdata.php'>";
					}
		}
	}else{
		$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
		} 
mysql_close($Conn); 
?>
</body>
</html>
