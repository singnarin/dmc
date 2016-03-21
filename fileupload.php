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
			if ($_SESSION['ses_username']!="" && $_SESSION['ses_username']!="56010000"){	

				$check = mysql_query("SELECT * FROM file WHERE schoolid = '".$_SESSION['ses_username']."'");
				$num = mysql_num_rows($check);
				if ($num<=0) {
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
    	<td><form name="form1" method="post" action="fileupload2.php" enctype="multipart/form-data">
			<div align="center">
			<input type="file" name="filUpload">
			<input name="btnSubmit" type="submit" value="Upload">
			</div>
			<br>
			วิธีดำเนินการ<br>
			1.ดาวน์โหลดไฟล์ <a href="fileUpload/OUC.xlsx" class="btn btn-info" role="button">แบบรายงานสรุปรายจ่ายจริงงบประมาณรายจ่ายประจำปี พ.ศ. 2558</a><br>
			2.กรอกไฟล์ที่ได้ดาวน์โหลดไปแล้วนั้นให้ถูกต้องครบถ้วน โดยการอ่านคำอธิบายตารางเพิ่มเติมให้เข้าใจก่อน<br>
			3.นำไฟล์ที่ได้กรอกเสร็จเรียบร้อยแล้วนั้นมาอัพโหลดเข้าสู่ระบบในหน้านี้<br><br>
			หมายเหตุ**<br>
			หากพบปัญหาในการใช้งานติดต่อ คุณนงลักษณ์ จำปานคร กลุ่มนโยบายและแผน โทร 054-887-204 ตอ่ 27<br>
			</form>
		</td>
  </tr>
 		 <?php
 		 }else{
	$message = "คุณได้ทำการยืนยันข้อมุลไปแล้ว";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=index1.php'>";
}
			}else if ($_SESSION['ses_username']!="" && $_SESSION['ses_username']=="56010000"){
				?>
	<tr>
    	<td>

    		<table class="table table-bordered">
    		<tr>
					<th colspan="4"> <div align="left"> <a href="index1.php" class="btn btn-info" role="button">กลับหน้าหลัก</a></div></th>
			</tr>
    			<tr>
					<th colspan="4"> <div align="center">โรงเรียนที่ส่งแล้ว</div></th>
				</tr>
				<tr>
					<th width="50"> <div align="center">ที่</div></th>
					<th width="50"> <div align="center">รหัสโรงเรียน</div></th>
					<th width="150"> <div align="center">ชื่อโรงเรียน</div></th>
					<th width="150"> <div align="center">ชื่อไฟล์</div></th>
				</tr>
					<?php

						$i = 1;
						$objQuery = mysql_query("SELECT * FROM file ");
						while($objResult = mysql_fetch_array($objQuery))
						{
					?>
				<tr>
					<td><div align="center"><?php echo $i ; $i++; ?></div></td>
					<td><div align="center"><?php echo $objResult["schoolid"];?></div></td>
					<td><div align="left"><?php 
					$sel_school = mysql_query("SELECT * FROM tbschool WHERE schoolid = '".$objResult["schoolid"]."' ORDER BY `tbschool`.`schoolid` ASC " );
					$schoolResult = mysql_fetch_array($sel_school);
					echo $schoolResult["schoolname"];?></div></td>
					<td><center><a href="fileUpload/<?php echo $objResult["filename"];?>"><?php echo $objResult["filename"];?></a></center></td>
				</tr>
					<?php
						}
					?>
				<tr>
					<th colspan="4"> <div align="center">โรงเรียนที่ยังไม่ได้ส่ง</div></th>
				</tr>
				<tr>
					<th width="50"> <div align="center">ที่</div></th>
					<th width="50"> <div align="center">รหัสโรงเรียน</div></th>
					<th width="150"> <div align="center">ชื่อโรงเรียน</div></th>
					<th width="150"> <div align="center">ชื่อไฟล์</div></th>
				</tr>
				<?php 
						$y=1;
						$innerQuery = mysql_query("SELECT tbschool.`schoolid`,tbschool.`schoolname` FROM tbschool INNER JOIN file ON tbschool.`schoolid`!=file.`schoolid`   ORDER BY `tbschool`.`schoolid` ASC");
						while($innerResult = mysql_fetch_array($innerQuery))
						{
				?>
				<tr>
					<td><div align="center"><?php echo $y; $y++;?></div></td>
					<td><div align="center"><?php echo $innerResult["schoolid"];?></div></td>
					<td><div align="left"><?php echo $innerResult["schoolname"];?></div></td>
					<td><center></center></td>
				</tr>
				<?php
						}
				?>
			</table>

		</td>
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
