<?php
include("include/connect.php");
session_start();
$summale1="null";
$sumfemale1 = "null" ;
header("Content-Type: application/vnd.ms-excel");
$date = date("Y-m-d");
header('Content-Disposition: attachment; filename="จำนวนบุคลากร'.$date.'.xls"');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Real Time Data Managment</title>
</head>

<body><div align="center">
<?php
	if ($_SESSION['ses_username']!="")
	{	
			$strSQL = "SELECT * FROM  tbschool where schoolid != '56010000'";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
		?>

		<table  x:str width="973" border="1" bordercolor="#0000FF" style="border-collapse:collapse;" >
  		<tr>
   		  	<th width="124" rowspan="2"> <div align="center">รหัสโรงเรียน</div></th>
    		<th width="242" rowspan="2"> <div align="center">ชื่อโรงเรียน</div></th>
			<th colspan="2"> <div align="center">ครู </div> <div align="center"></div></th>
			<th colspan="2"> <div align="center">พนักงานราชการ</div> <div align="center"></div></th>
			<th colspan="2"> <div align="center">ลูกจ้างประจำ</div> <div align="center"></div></th>
			<th colspan="2"> <div align="center">ลูกจ้างชั่วคราว</div> <div align="center"></div></th>
			<th colspan="3"><div align="center">รวม</div> <div align="center"></div></th>
		  </tr>
		<tr>
			<td >ชาย</td>
			<td>หญิง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ทั้งหมด</td>
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
	<?php
			$strSQLtecher = "SELECT * FROM  tbt where schoolid = '".$objResult["schoolid"]."' ";
			$objQuerytecher = mysql_query($strSQLtecher) or die ("Error Query [".$strSQLtecher."]");
			$objResulttecher = mysql_fetch_array($objQuerytecher)
				?>
	<td><?php echo $objResulttecher["male"];?></td>
	<td><?php echo $objResulttecher["female"];?></td>
	<?php
			$strSQLemployee = "SELECT * FROM  tbe where schoolid = '".$objResult["schoolid"]."' ";
			$objQueryemployee = mysql_query($strSQLemployee) or die ("Error Query [".$strSQLemployee."]");
			$objResultemployee = mysql_fetch_array($objQueryemployee)
				?>
	<td><?php echo $objResultemployee["male"];?></td>
	<td><?php echo $objResultemployee["female"];?></td>
	<?php
			$strSQLforeigner = "SELECT * FROM  tbf where schoolid = '".$objResult["schoolid"]."' ";
			$objQueryforeigner = mysql_query($strSQLforeigner) or die ("Error Query [".$strSQLforeigner."]");
			$objResultforeigner = mysql_fetch_array($objQueryforeigner)
				?>
	<td><?php echo $objResultforeigner["male"];?></td>
	<td><?php echo $objResultforeigner["female"];?></td>
	<?php
			$strSQLtemporary = "SELECT * FROM  tbc where schoolid = '".$objResult["schoolid"]."' ";
			$objQuerytemporary = mysql_query($strSQLtemporary) or die ("Error Query [".$strSQLtemporary."]");
			$objResulttemporary = mysql_fetch_array($objQuerytemporary)
				?>
	<td><?php echo $objResulttemporary["male"];?></td>
	<td><?php echo $objResulttemporary["female"];?></td>
	<?php
	$male = $objResulttemporary["male"] + $objResultemployee["male"] + $objResultforeigner["male"] + $objResulttecher["male"] ; 
	$female = $objResulttemporary["female"] + $objResultemployee["female"] + $objResultforeigner["female"] + $objResulttecher["female"] ;
	?>
	<td><?php echo $male ;
	$summale1 = $male + $summale1;
	?></td>
	<td><?php echo $female ;
	$sumfemale1 = $female + $sumfemale1;
	?></td>
	<td><?php echo $male + $female ;
	?></td>
	</tr>
<?php
}
?>
	<tr>
	<td colspan="2"><div align="center">รวม</div></td>
	<?php
  			$strSQLsummaletecher = "SELECT SUM(male), SUM(female) FROM  tbt ";
			$objQuerysummaletecher = mysql_query($strSQLsummaletecher) or die ("Error Query [".$strSQLsummaletecher."]");
			$objResultsummaletecher = mysql_fetch_array($objQuerysummaletecher)
  	?>
  <td><?php echo $objResultsummaletecher["SUM(male)"];?></td>
  <td><?php echo $objResultsummaletecher["SUM(female)"];?></td>
  <?php
  			$strSQLemployee = "SELECT SUM(male), SUM(female) FROM  tbe ";
			$objQueryemployee = mysql_query($strSQLemployee) or die ("Error Query [".$strSQLemployee."]");
			$objResultemployee = mysql_fetch_array($objQueryemployee)
  ?>
  <td><?php echo $objResultemployee["SUM(male)"];?></td>
  <td><?php echo $objResultemployee["SUM(female)"];?></td>
  <?php
  			$strSQLforeigner = "SELECT SUM(male), SUM(female) FROM  tbf ";
			$objQueryforeigner = mysql_query($strSQLforeigner) or die ("Error Query [".$strSQLforeigner."]");
			$objResultforeigner = mysql_fetch_array($objQueryforeigner)
  ?>
  <td><?php echo $objResultforeigner["SUM(male)"];?></td>
  <td><?php echo $objResultforeigner["SUM(female)"];?></td>
  <?php
  			$strSQLtemporary = "SELECT SUM(male), SUM(female) FROM  tbc ";
			$objQuerytemporary = mysql_query($strSQLtemporary) or die ("Error Query [".$strSQLtemporary."]");
			$objResulttemporary = mysql_fetch_array($objQuerytemporary)
  ?>
  <td><?php echo $objResulttemporary["SUM(male)"];?></td>
  <td><?php echo $objResulttemporary["SUM(female)"];?></td>
  <td><?php echo $summale1 ;?></td>
  <td><?php echo $sumfemale1 ;?></td>
  <td><?php echo $summale1 + $sumfemale1 ;?></td>
	</tr>
  </table>
<div align="center">
        <input type="button" name="Button" value="ออกจากระบบ" onClick="window.location.href='logout.php'">
		<input type="button" name="Button" value="ออกจากระบบ" onClick="window.location.href='export_sumperson.php'"></div>
</div>
<?php
}else{
	$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
}
mysql_close($Conn);?>
</body>

</html>
