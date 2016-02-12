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
	?>
	
<table width="900" border="0"><form id="form1" name="form1" method="post" action="adddata1.php">
  <tr>
    <td><?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td>
    	<table width="900" border="0">
      		<tr>
        		<td colspan="5"><div align="center">แบบกรอกข้อมูลผู้ติดต่อประสานงาน</div></td>
        	</tr>
      		<tr>
       			 <td colspan="5"><div align="center">โรงเรียน

		<?php
		$strSQL = "SELECT * FROM  `tbschool` WHERE schoolid = '".$_SESSION['ses_username']."'";
		$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
		while($objResult = mysql_fetch_array($objQuery))
			{
			echo $objResult["schoolname"];
			}
		?></div>
				</td>
        	</tr>
      		<tr>
       			 <td colspan="5"><div align="center"></div></td>
       		</tr>
		</table>
		<table width="900" border="1" bordercolor="#0000FF" style="border-collapse:collapse;" >
			<tr>
				<th>ชื่อ-สกุลผู้บริหาร</th>
				<th>เบอร์โทรศัพท์<br><font color="red" size="1">*ตัวอย่าง 0891122145</font></th>
				<th>ชื่อ-สกุลผู้ประสานงาน(กรณีผู้บริหารไม่อยู่)</th>
				<th>เบอร์โทรศัพท์<br><font color="red" size="1">*ตัวอย่าง 0891122145</font></th>
			</tr>
			<tr>
				<td><input type="text" name="director" size="40" value=""/></td>
				<td><input type="text" name="teldirector" maxlength="10"  value=""/></td>
				<td><input type="text" name="contact"  size="40" value=""/></td>
				<td><input type="text" name="telcontact" maxlength="10" value=""/></td>
			</tr>
		</table>
    </td>
  </tr>
  <tr>
    <td><div align="center"><input type="submit" name="Submit" value="บันทึกข้อมูล" />
        <input type="reset" name="Submit2" value="ยกเลิก" />
        <input type="button" name="Button" value="ออกจากระบบ" onClick="window.location.href='logout.php'"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php include('footer.php');?></td>
  </tr>
</form>
</table>
</div>


<?php
}else{
	$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
} 		
		?>
<?php mysql_close($Conn); ?>
</body>

</html>
