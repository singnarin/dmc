<?php
include("include/connect.php");
session_start();
$summale="null";
$sumfemale="null";
$sumroom="null";
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
			$strSQL = "SELECT * FROM  tbschool where schoolid != '56010000'";
			$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
		?>

		</div></td>
        </tr>
		</table>
	</td>
  </tr>
  <tr>
    <td></td>
	<td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>

		<table width="2000" border="1" bordercolor="#0000FF" style="border-collapse:collapse;" >
  		<tr>
   		  <th width="124" rowspan="2"> <div align="center">รหัสโรงเรียน</div></th>
    		<th width="242" rowspan="2"> <div align="center">ชื่อโรงเรียน</div></th>
			<th colspan="3"> <div align="center">อ.1 </div> <div align="center"></div></th>
			<th colspan="3"> <div align="center">อ.2 </div> <div align="center"></div></th>
			<th colspan="3"> <div align="center">ป.1 </div> <div align="center"></div></th>
			<th colspan="3"> <div align="center">ป.2 </div> <div align="center"></div></th>
			<th colspan="3"> <div align="center">ป.3</div> <div align="center"></div></th>
			<th colspan="3"> <div align="center">ป.4</div> <div align="center"></div></th>
			<th colspan="3"> <div align="center">ป.5 </div> <div align="center"></div></th>
			<th colspan="3"> <div align="center">ป.6</div> <div align="center"></div></th>
			<th colspan="3"> <div align="center">ม.1</div> <div align="center"></div></th>
			<th colspan="3"> <div align="center">ม.2 </div> <div align="center"></div></th>
			<th colspan="3"> <div align="center">ม.3</div> <div align="center"></div></th>
			<th colspan="4"> <div align="center">รวม</div> <div align="center"></div></th>
		  </tr>
		<tr>
			<td >ชาย</td>
			<td>หญิง</td>
			<td >ห้อง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ห้อง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ห้อง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ห้อง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ห้อง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ห้อง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ห้อง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ห้อง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ห้อง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ห้อง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >ห้อง</td>
			<td >ชาย</td>
			<td >หญิง</td>
			<td >รวม</td>
			<td >ห้อง</td>
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
			$strSQLo1 = "SELECT * FROM  tbo1 where schoolid = '".$objResult["schoolid"]."' ";
			$objQueryo1 = mysql_query($strSQLo1) or die ("Error Query [".$strSQLo1."]");
			$objResulto1 = mysql_fetch_array($objQueryo1)
				?>
	<td><?php echo $objResulto1["male"];?></td>
	<td><?php echo $objResulto1["female"];?></td>
	<td><?php echo $objResulto1["room"];?></td>
	<?php
			$strSQLo2 = "SELECT * FROM  tbo2 where schoolid = '".$objResult["schoolid"]."' ";
			$objQueryo2 = mysql_query($strSQLo2) or die ("Error Query [".$strSQLo2."]");
			$objResulto2 = mysql_fetch_array($objQueryo2)
	?>
	<td><?php echo $objResulto2["male"];?></td>
	<td><?php echo $objResulto2["female"];?></td>
	<td><?php echo $objResulto2["room"];?></td>
	<?php
			$strSQLp1 = "SELECT * FROM  tbp1 where schoolid = '".$objResult["schoolid"]."' ";
			$objQueryp1 = mysql_query($strSQLp1) or die ("Error Query [".$strSQLp1."]");
			$objResultp1 = mysql_fetch_array($objQueryp1)
	?>
	<td><?php echo $objResultp1["male"];?></td>
	<td><?php echo $objResultp1["female"];?></td>
	<td><?php echo $objResultp1["room"];?></td>
	<?php
			$strSQLp2 = "SELECT * FROM  tbp2 where schoolid = '".$objResult["schoolid"]."' ";
			$objQueryp2 = mysql_query($strSQLp2) or die ("Error Query [".$strSQLp2."]");
			$objResultp2 = mysql_fetch_array($objQueryp2)
	?>
	<td><?php echo $objResultp2["male"];?></td>
	<td><?php echo $objResultp2["female"];?></td>
	<td><?php echo $objResultp2["room"];?></td>
	<?php
			$strSQLp3 = "SELECT * FROM  tbp3 where schoolid = '".$objResult["schoolid"]."' ";
			$objQueryp3 = mysql_query($strSQLp3) or die ("Error Query [".$strSQLp3."]");
			$objResultp3 = mysql_fetch_array($objQueryp3)
	?>
	<td><?php echo $objResultp3["male"];?></td>
	<td><?php echo $objResultp3["female"];?></td>
	<td><?php echo $objResultp3["room"];?></td>
	<?php
			$strSQLp4 = "SELECT * FROM  tbp4 where schoolid = '".$objResult["schoolid"]."' ";
			$objQueryp4 = mysql_query($strSQLp4) or die ("Error Query [".$strSQLp4."]");
			$objResultp4 = mysql_fetch_array($objQueryp4)
	?>
	<td><?php echo $objResultp4["male"];?></td>
	<td><?php echo $objResultp4["female"];?></td>
	<td><?php echo $objResultp4["room"];?></td>
	<?php
			$strSQLp5 = "SELECT * FROM  tbp5 where schoolid = '".$objResult["schoolid"]."' ";
			$objQueryp5 = mysql_query($strSQLp5) or die ("Error Query [".$strSQLp5."]");
			$objResultp5 = mysql_fetch_array($objQueryp5)
	?>
	<td><?php echo $objResultp5["male"];?></td>
	<td><?php echo $objResultp5["female"];?></td>
	<td><?php echo $objResultp5["room"];?></td>
	<?php
			$strSQLp6 = "SELECT * FROM  tbp6 where schoolid = '".$objResult["schoolid"]."' ";
			$objQueryp6 = mysql_query($strSQLp6) or die ("Error Query [".$strSQLp6."]");
			$objResultp6 = mysql_fetch_array($objQueryp6)
	?>
	<td><?php echo $objResultp6["male"];?></td>
	<td><?php echo $objResultp6["female"];?></td>
	<td><?php echo $objResultp6["room"];?></td>
	<?php
			$strSQLm1 = "SELECT * FROM  tbm1 where schoolid = '".$objResult["schoolid"]."' ";
			$objQuerym1 = mysql_query($strSQLm1) or die ("Error Query [".$strSQLm1."]");
			$objResultm1 = mysql_fetch_array($objQuerym1)
	?>
	<td><?php echo $objResultm1["male"];?></td>
	<td><?php echo $objResultm1["female"];?></td>
	<td><?php echo $objResultm1["room"];?></td>
	<?php
			$strSQLm2 = "SELECT * FROM  tbm2 where schoolid = '".$objResult["schoolid"]."' ";
			$objQuerym2 = mysql_query($strSQLm2) or die ("Error Query [".$strSQLm2."]");
			$objResultm2 = mysql_fetch_array($objQuerym2)
	?>
	<td><?php echo $objResultm2["male"];?></td>
	<td><?php echo $objResultm2["female"];?></td>
	<td><?php echo $objResultm2["room"];?></td>
	<?php
			$strSQLm3 = "SELECT * FROM  tbm3 where schoolid = '".$objResult["schoolid"]."' ";
			$objQuerym3 = mysql_query($strSQLm3) or die ("Error Query [".$strSQLm3."]");
			$objResultm3 = mysql_fetch_array($objQuerym3)
	?>
	<td><?php echo $objResultm3["male"];?></td>
	<td><?php echo $objResultm3["female"];?></td>
	<td><?php echo $objResultm3["room"];?></td>
	<?php
	$sumschoolmale = $objResultm3["male"] + $objResultm2["male"] + $objResultm1["male"] + $objResulto2["male"] + $objResulto1["male"] + $objResultp1["male"] + $objResultp2["male"] + $objResultp3["male"] + $objResultp4["male"] + $objResultp5["male"] + $objResultp6["male"];
	$sumschoolfemale = $objResultm3["female"] + $objResultm2["female"] + $objResultm1["female"] + $objResulto2["female"] + $objResulto1["female"] + $objResultp1["female"] + $objResultp2["female"] + $objResultp3["female"] + $objResultp4["female"] + $objResultp5["female"] + $objResultp6["female"];
	$sumschoolroom = $objResultm3["room"] + $objResultm2["room"] + $objResultm1["room"] + $objResulto2["room"] + $objResulto1["room"] + $objResultp1["room"] + $objResultp2["room"] + $objResultp3["room"] + $objResultp4["room"] + $objResultp5["room"] + $objResultp6["room"];
	?>
	<td><?php echo $sumschoolmale;
	$summale = $sumschoolmale + $summale ;
	?></td>
	<td><?php echo $sumschoolfemale;
	$sumfemale = $sumschoolfemale + $sumfemale;
	?></td>
	<td><?php echo $sumschoolfemale + $sumschoolmale;?></td>
	<td><?php echo $sumschoolroom ;
	$sumroom = $sumschoolroom + $sumroom;
	?></td>
  </tr>
<?php
}
?>
	  <tr>
  <td colspan="2"> <div align="center">รวม</div> <div align="center"></div></td>
  <?php
  			$strSQLsummaleo1 = "SELECT SUM(male), SUM(female), SUM(room) FROM  tbo1 ";
			$objQuerysummaleo1 = mysql_query($strSQLsummaleo1) or die ("Error Query [".$strSQLsummaleo1."]");
			$objResultsummaleo1 = mysql_fetch_array($objQuerysummaleo1)
  ?>
  <td><?php echo $objResultsummaleo1["SUM(male)"];?></td>
  <td><?php echo $objResultsummaleo1["SUM(female)"];?></td>
  <td><?php echo $objResultsummaleo1["SUM(room)"];?></td>
  <?php
  			$strSQLsummaleo2 = "SELECT SUM(male), SUM(female), SUM(room) FROM  tbo2 ";
			$objQuerysummaleo2 = mysql_query($strSQLsummaleo2) or die ("Error Query [".$strSQLsummaleo2."]");
			$objResultsummaleo2 = mysql_fetch_array($objQuerysummaleo2)
  ?>
  <td><?php echo $objResultsummaleo2["SUM(male)"];?></td>
  <td><?php echo $objResultsummaleo2["SUM(female)"];?></td>
  <td><?php echo $objResultsummaleo2["SUM(room)"];?></td>
  <?php
  			$strSQLsummalep1 = "SELECT SUM(male), SUM(female), SUM(room) FROM  tbp1 ";
			$objQuerysummalep1 = mysql_query($strSQLsummalep1) or die ("Error Query [".$strSQLsummalep1."]");
			$objResultsummalep1 = mysql_fetch_array($objQuerysummalep1)
  ?>
  <td><?php echo $objResultsummalep1["SUM(male)"];?></td>
  <td><?php echo $objResultsummalep1["SUM(female)"];?></td>
  <td><?php echo $objResultsummalep1["SUM(room)"];?></td>
  <?php
  			$strSQLsummalep2 = "SELECT SUM(male), SUM(female), SUM(room) FROM  tbp2 ";
			$objQuerysummalep2 = mysql_query($strSQLsummalep2) or die ("Error Query [".$strSQLsummalep2."]");
			$objResultsummalep2 = mysql_fetch_array($objQuerysummalep2)
  ?>
  <td><?php echo $objResultsummalep2["SUM(male)"];?></td>
  <td><?php echo $objResultsummalep2["SUM(female)"];?></td>
  <td><?php echo $objResultsummalep2["SUM(room)"];?></td>
  <?php
  			$strSQLsummalep3 = "SELECT SUM(male), SUM(female), SUM(room) FROM  tbp3 ";
			$objQuerysummalep3 = mysql_query($strSQLsummalep3) or die ("Error Query [".$strSQLsummalep3."]");
			$objResultsummalep3 = mysql_fetch_array($objQuerysummalep3)
  ?>
  <td><?php echo $objResultsummalep3["SUM(male)"];?></td>
  <td><?php echo $objResultsummalep3["SUM(female)"];?></td>
  <td><?php echo $objResultsummalep3["SUM(room)"];?></td>

<?php
  			$strSQLsummalep4 = "SELECT SUM(male), SUM(female), SUM(room) FROM  tbp4 ";
			$objQuerysummalep4 = mysql_query($strSQLsummalep4) or die ("Error Query [".$strSQLsummalep4."]");
			$objResultsummalep4 = mysql_fetch_array($objQuerysummalep4)
  ?>
  <td><?php echo $objResultsummalep4["SUM(male)"];?></td>
  <td><?php echo $objResultsummalep4["SUM(female)"];?></td>
  <td><?php echo $objResultsummalep4["SUM(room)"];?></td>
  <?php
  			$strSQLsummalep5 = "SELECT SUM(male), SUM(female), SUM(room) FROM  tbp5 ";
			$objQuerysummalep5 = mysql_query($strSQLsummalep5) or die ("Error Query [".$strSQLsummalep5."]");
			$objResultsummalep5 = mysql_fetch_array($objQuerysummalep5)
  ?>
  <td><?php echo $objResultsummalep5["SUM(male)"];?></td>
  <td><?php echo $objResultsummalep5["SUM(female)"];?></td>
  <td><?php echo $objResultsummalep5["SUM(room)"];?></td>
  <?php
  			$strSQLsummalep6 = "SELECT SUM(male), SUM(female), SUM(room) FROM  tbp6 ";
			$objQuerysummalep6 = mysql_query($strSQLsummalep6) or die ("Error Query [".$strSQLsummalep6."]");
			$objResultsummalep6 = mysql_fetch_array($objQuerysummalep6)
  ?>
  <td><?php echo $objResultsummalep6["SUM(male)"];?></td>
  <td><?php echo $objResultsummalep6["SUM(female)"];?></td>
  <td><?php echo $objResultsummalep6["SUM(room)"];?></td>
  <?php
  			$strSQLsummalem1 = "SELECT SUM(male), SUM(female), SUM(room) FROM  tbm1 ";
			$objQuerysummalem1 = mysql_query($strSQLsummalem1) or die ("Error Query [".$strSQLsummalem1."]");
			$objResultsummalem1 = mysql_fetch_array($objQuerysummalem1)
  ?>
  <td><?php echo $objResultsummalem1["SUM(male)"];?></td>
  <td><?php echo $objResultsummalem1["SUM(female)"];?></td>
  <td><?php echo $objResultsummalem1["SUM(room)"];?></td>
  <?php
  			$strSQLsummalem2 = "SELECT SUM(male), SUM(female), SUM(room) FROM  tbm2 ";
			$objQuerysummalem2 = mysql_query($strSQLsummalem2) or die ("Error Query [".$strSQLsummalem2."]");
			$objResultsummalem2 = mysql_fetch_array($objQuerysummalem2)
  ?>
  <td><?php echo $objResultsummalem2["SUM(male)"];?></td>
  <td><?php echo $objResultsummalem2["SUM(female)"];?></td>
  <td><?php echo $objResultsummalem2["SUM(room)"];?></td>
  <?php
  			$strSQLsummalem3 = "SELECT SUM(male), SUM(female), SUM(room) FROM  tbm3 ";
			$objQuerysummalem3 = mysql_query($strSQLsummalem3) or die ("Error Query [".$strSQLsummalem3."]");
			$objResultsummalem3 = mysql_fetch_array($objQuerysummalem3)
  ?>
  <td><?php echo $objResultsummalem3["SUM(male)"];?></td>
  <td><?php echo $objResultsummalem3["SUM(female)"];?></td>
  <td><?php echo $objResultsummalem3["SUM(room)"];?></td>
  
  <td><?php echo $summale  ;?></td>
  <td><?php echo $sumfemale  ;?></td>
  <td><?php echo $summale + $sumfemale  ;?></td>
  <td><?php echo $sumroom  ;?></td>
  </tr>	
</table>
<div align="center">
        <input type="button" name="Button" value="ออกจากระบบ" onClick="window.location.href='logout.php'">
		<input type="button" name="Button" value="พิมพ์เอกสาร" onClick="window.location.href='export_sumdata.php'">
		</div>
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
