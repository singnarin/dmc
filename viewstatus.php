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
<table width="900" border="0">
  <tr>
    <td><?php include ("header.php"); ?></td>
  </tr>
  <tr>
    <td><table width="900" border="0">
      <tr>
        <td colspan="5"><div align="center">แบบกรอกข้อมูลจำนวนนักเรียน  ห้องเรียนและครู ภาคเรียนที่ 2 ปีการศึกษา 2558</div></td>
        </tr>
      <tr>
        <td colspan="5"><div align="center">ข้อมูล ณ วันที่ 2 พฤศจิกายน 2558</div></td>
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
		?>
		</div></td>
        </tr>
      <tr>
        <td colspan="5"><div align="center">
		<?php
			$strSQL = "SELECT * FROM  tbschool where schoolid != '56010000' ";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
		?>
		<table width="778" border="1" bordercolor="#0000FF" style="border-collapse:collapse;" >
  		<tr>
    		<th width="221"> <div align="center">รหัสโรงเรียน</div></th>
    		<th width="399"> <div align="center">ชื่อโรงเรียน</div></th>
			<th width="119"> <div align="center">สถานะการบันทึกข้อมูล</div></th>
  		</tr>
		<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><a href="viewschooldata.php?txtschoolid=<?php echo $objResult["schoolid"] ;?>" target = "_blank">
	<?php echo $objResult["schoolid"];?>
	</a></div></td>
    <td><?php echo $objResult["schoolname"] ; ?></td>
	<td>
		<?php
			$strSQLstatus = "SELECT * FROM  tbstatus where schoolid = '".$objResult["schoolid"]."'";
			$objQuerystatus = mysql_query($strSQLstatus) or die ("Error Query [".$strSQLstatus."]");
			$objResultstatus = mysql_fetch_array($objQuerystatus);
			if($objResultstatus["status"] == 1) {   
			echo "<div align=\"center\"><img src=\"images/ok.png\"/></div>";
			}else{
				echo "<div align=\"center\"><img src=\"images/no.png\"/></div>" ;
			}
		?>
	</td>
  </tr>
<?php
}
?>
		</table>
		</div></td>
        </tr>
		</table>
	</td>
  </tr>
  <tr>
    <td>
	<div align="center">
		<a href="viewsumdata.php" target = "_blank"><input type="button" name="Button" value="ภาพรวมจำนวนนักเรียน" onClick="#'"></a>
		<a href="viewsumperson.php" target = "_blank"><input type="button" name="Button" value="ภาพรวมจำนวนบุคลากร" onClick="#'"></a>
        <input type="button" name="Button" value="ออกจากระบบ" onClick="window.location.href='logout.php'"></div></td>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table></div>
<?php
}else{
	$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
}
mysql_close($Conn); ?>
</body>

</html>
