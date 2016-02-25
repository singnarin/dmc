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
<center>

  <table width="900"  border="0">
  	<tr>
    	<td colspan="2"><?php include("header.php"); ?></td>
  	</tr>
  		<?php
			if ($_SESSION['ses_username']!=""){	
		?>
  	<tr>
    	<td><div align = "top">
      		<div id='cssmenu'>
				<ul>
   					<li><a href='index1.php'><span>Home</span></a></li>
   					<li><a href='index2.php' target = "_blank" ><span>ข้อมูลจำนวนนักเรียน</span></a></li>
   					<li class='last'><a href='contact/index.php' target = "_blank"><span>ข้อมูลผู้ประสานงานโรงเรียน</span></a></li>
   						<?php
   							if($_SESSION['ses_username']=="56010000"){	
   								echo "<li class='last'><a href='dmc/index.php' target = \"_blank\"><span>ข้อมูลนักเรียนรายบุคคล</span></a></li>";
   							}
   						?>
   					<li class='last'><a href='http://202.143.132.3/dataschool2559/index.php' target = "_blank"><span>ข้อมูลครู,บุคลากรการศึกษา</span></a></li>
   					<li class='last'><a href='changpass.php' target = "_blank"><span>เปลี่ยนรหัสผ่าน</span></a></li>
   					<li class='last'><a href='logout.php' ><span>ออกจากระบบ</span></a></li>
   					<li class='last'><a href='#' target = "_blank"><span>&nbsp;</span></a></li>
   					<li class='last'><a href='#' ><span>&nbsp;</span></a></li>
   					
				</ul>
			</div>
    	</td>
    	<td><img src = "images/student.jpg"></td>
  </tr>
 		 <?php
			}else{
				$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
			} 
mysql_close($Conn); 
?>
  	<tr>
    	<td height="59" colspan="2"><br><?php include ("footer.php"); ?></td>
  	</tr>
</table>
</center>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
