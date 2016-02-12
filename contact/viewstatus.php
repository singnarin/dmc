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
	
<table width="100%" border="0"><form id="form1" name="form1" method="post" action="editdata.php">
  <tr>
    <td><?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td><br><br>
    	<table width="100%" border="0">
      		<tr>
        		<td colspan="5"><div align="center">แบบกรอกข้อมูลผู้ติดต่อประสานงาน</div></td>
        	</tr>
      		<tr>
       			<td colspan="5"><div align="center">
<?php
	$strSQL = "SELECT * FROM  `tbschool` WHERE schoolid = '".$_SESSION['ses_username']."'";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	while($objResult = mysql_fetch_array($objQuery))
		{
		echo $objResult["schoolname"];
		}
?></div><br><br>
				</td>
        	</tr>
      		<tr>
       			 <td colspan="5"><div align="center"></div></td>
       		</tr>
		</table>

<table width="100%" border="1" bordercolor="#0000FF" style="border-collapse:collapse;" >
  		<tr>
    		<th> <div align="center">รหัสโรงเรียน</div></th>
    		<th> <div align="center">ชื่อโรงเรียน</div></th>
			<th> <div align="center">ชื่อ-สกุลผู้บริหาร</div></th>
			<th> <div align="center">เบอร์โทรผู้บริหาร</div></th>
			<th> <div align="center">ชื่อ-สกุลผู้ติดต่อประสานงาน</div></th>
			<th> <div align="center">เบอร์โทรผู้ติดต่อประสานงาน</div></th>
  		</tr>
  		<?php
			$objQuery = mysql_query("SELECT * FROM  tbschool where schoolid != '56010000' ") or die ("Error Query())");
			while($objResult = mysql_fetch_array($objQuery))
			{
		?>
		<tr>
			<td>
			<div align="center"><a href="editschooldata.php?txtschoolid=<?php echo $objResult["schoolid"] ;?>" target = "_blank">
			<?php echo $objResult["schoolid"];?></td>
			<td><?php echo $objResult["schoolname"];?></td>
			<td>
			<?php
				$selcontact = mysql_query("SELECT * FROM  contact where schoolid = '".$objResult["schoolid"]."' ") or die ("Error Query())");
				$contactResult = mysql_fetch_array($selcontact);
				echo $contactResult["director"];
			?>
			</td>
			<td><?php echo $contactResult["teldirector"];?></td>
			<td><?php echo $contactResult["contact"];?></td>
			<td><?php echo $contactResult["telcontact"];?></td>
		</tr>
		<?php
		}
		?>
</table>

	</td>
</tr>
<tr>
    <td><input type="button" name="Button" value="พิมพ์" onClick="window.location.href='exportdata.php'"></div>
        <input type="button" name="Button" value="ออกจากระบบ" onClick="window.location.href='logout.php'"></div>
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
</tr>
<tr>
    <td><br><br><br><?php include('footer.php');?></td>
</tr>
</form>
</table></div>

<?php
}else{
	$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
} 		
mysql_close($Conn); 
?>
</body>

</html>
