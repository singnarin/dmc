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
        <td colspan="5"><div align="center">โรงเรียน
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
        <td colspan="5"><div align="center"></div></td>
        </tr>
		</table><table width="900" border="1" bordercolor="#0000FF" style="border-collapse:collapse;" >
      <tr>
        <td width="193" rowspan="2"><div align="center">ชั้น</div></td>
        <td colspan="3"><div align="center">จำนวนนักเรียน</div></td>
        <td width="144" rowspan="2"><div align="center">จำนวนหัอง</div></td>
      </tr>
      <tr>
        <td width="213"><div align="center">ชาย</div></td>
        <td width="213"><div align="center">หญิง</div></td>
        <td width="103"><div align="center">รวม</div></td>
        </tr>
      <tr>
        <td>อนุบาล 1</td>
				<?php
		$strSQL1 = "SELECT * FROM  `tbo1` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQuery1 = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
			$objResult1 = mysql_fetch_array($objQuery1);
		?>
        <td><?php echo $objResult1["male"]; ?> </td>
        <td><?php echo $objResult1["female"]; ?></td>
        <td>
		<?php 	$sroom = $objResult1["room"] ;
			$smale = $objResult1["male"] ;
			$sfemale = $objResult1["female"] ;
			echo $smale + $sfemale ;
		 ?>		</td>
        <td><?php echo $objResult1["room"]; ?></td>
		
	  </tr>
      <tr>
        <td>อนุบาล 2</td>
		<?php
		$strSQL2 = "SELECT * FROM  `tbo2` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
			$objResult2 = mysql_fetch_array($objQuery2);
		?>
        <td><?php echo $objResult2["male"]; ?></td>
        <td><?php echo $objResult2["female"]; ?></td>
        <td>
		<?php 	$sroom2 = $objResult2["room"] ;
			$smale2 = $objResult2["male"] ;
			$sfemale2 = $objResult2["female"] ;
			echo $smale2 + $sfemale2 ;
		 ?>		</td>
        <td><?php echo $objResult2["room"]; ?></td>
		
      </tr>
      <tr>
        <td>รวมระดับปฐมวัย</td>
        <td>
		<?php 
		$sumom = $smale + $smale2 ;
		echo $sumom ;?>		</td>
        <td>
		<?php 
		$sumow = $sfemale + $sfemale2 ;
		echo  $sumow ;?>		</td>
        <td>
		<?php 
		$sumo = $sumom + $sumow ;
		echo $sumo ; ?>		</td>
        <td>
		<?php 
		$sumroomo = $sroom + $sroom2 ;
		echo $sumroomo ; ?>		</td>
	  </tr>
      <tr>
        <td>ประถมศึกษาปีที่ 1 </td>
		<?php
		$strSQLp1 = "SELECT * FROM  `tbp1` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQueryp1 = mysql_query($strSQLp1) or die ("Error Query [".$strSQLp1."]");
			$objResultp1 = mysql_fetch_array($objQueryp1);
		?>
        <td><?php echo $objResultp1["male"]; ?></td>
        <td><?php echo $objResultp1["female"]; ?></td>
        <td>
		<?php 	$sroomp1 = $objResultp1["room"] ;
			$smalep1 = $objResultp1["male"] ;
			$sfemalep1 = $objResultp1["female"] ;
			echo $smalep1 + $sfemalep1 ;
		 ?>		</td>
        <td><?php echo $objResultp1["room"]; ?></td>
		
      </tr>
      <tr>
        <td>ประถมศึกษาปีที่ 2 </td>
		<?php
		$strSQLp2 = "SELECT * FROM  `tbp2` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQueryp2 = mysql_query($strSQLp2) or die ("Error Query [".$strSQLp2."]");
			$objResultp2 = mysql_fetch_array($objQueryp2);
		?>
        <td><?php echo $objResultp2["male"] ; ?></td>
        <td><?php echo $objResultp2["female"] ; ?></td>
        <td>
		<?php 	$sroomp2 = $objResultp2["room"] ;
			$smalep2 = $objResultp2["male"] ;
			$sfemalep2 = $objResultp2["female"] ;
			echo $smalep2 + $sfemalep2 ;
		 ?>		</td>
        <td><?php echo $objResultp2["room"]; ?></td>
		
      </tr>
      <tr>
        <td>ประถมศึกษาปีที่ 3 </td>
		<?php
		$strSQLp3 = "SELECT * FROM  `tbp3` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQueryp3 = mysql_query($strSQLp3) or die ("Error Query [".$strSQLp3."]");
			$objResultp3 = mysql_fetch_array($objQueryp3);
		?>
        <td><?php echo $objResultp3["male"] ; ?></td>
        <td><?php echo $objResultp3["female"] ; ?></td>
        <td>
		<?php 	$sroomp3 = $objResultp3["room"] ;
			$smalep3 = $objResultp3["male"] ;
			$sfemalep3 = $objResultp3["female"] ;
			echo $smalep3 + $sfemalep3 ;
		 ?>		</td>
        <td><?php echo $objResultp3["room"] ; ?></td>
		
      </tr>
      <tr>
        <td>ประถมศึกษาปีที่ 4 </td>
		<?php
		$strSQLp4 = "SELECT * FROM  `tbp4` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQueryp4 = mysql_query($strSQLp4) or die ("Error Query [".$strSQLp4."]");
			$objResultp4 = mysql_fetch_array($objQueryp4);
		?>
		<td><?php echo $objResultp4["male"] ; ?></td>
		<td><?php echo $objResultp4["female"] ; ?></td>
        <td>
		<?php 	$sroomp4 = $objResultp4["room"] ;
			$smalep4 = $objResultp4["male"] ;
			$sfemalep4 = $objResultp4["female"] ;
			echo $smalep4 + $sfemalep4 ;
		 ?>		</td>
        <td><?php echo $objResultp4["room"] ; ?></td>
		
      </tr>
      <tr>
        <td>ประถมศึกษาปีที่ 5 </td>
		<?php
		$strSQLp5 = "SELECT * FROM  `tbp5` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQueryp5 = mysql_query($strSQLp5) or die ("Error Query [".$strSQLp5."]");
			$objResultp5 = mysql_fetch_array($objQueryp5);
		?>
        <td><?php echo $objResultp5["male"] ; ?></td>
        <td><?php echo $objResultp5["female"] ; ?></td>
        <td>
		<?php 	$sroomp5 = $objResultp5["room"] ;
			$smalep5 = $objResultp5["male"] ;
			$sfemalep5 = $objResultp5["female"] ;
			echo $smalep5 + $sfemalep5 ;
		 ?>		</td>
        <td><?php echo $objResultp5["room"] ; ?></td>
		
      </tr>
      <tr>
        <td>ประถมศึกษาปีที่ 6 </td>
		<?php
		$strSQLp6 = "SELECT * FROM  `tbp6` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQueryp6 = mysql_query($strSQLp6) or die ("Error Query [".$strSQLp6."]");
			$objResultp6 = mysql_fetch_array($objQueryp6);
		?>
        <td><?php echo $objResultp6["male"] ; ?></td>
        <td><?php echo $objResultp6["female"] ; ?></td>
        <td>
		<?php 	$sroomp6 = $objResultp6["room"] ;
			$smalep6 = $objResultp6["male"] ;
			$sfemalep6 = $objResultp6["female"] ;
			echo $smalep6 + $sfemalep6 ;
		 ?>		</td>
        <td><?php echo $objResultp6["room"] ; ?></td>
		
      </tr>
      <tr>
        <td>รวมระดับประถมศึกษา</td>
        <td>
		<?php 
		$sumpm = $smalep1 + $smalep2 + $smalep3 + $smalep4 + $smalep5 + $smalep6 ;
		echo  $sumpm ;
		?>		</td>
        <td>
		<?php 
		$sumpw = $sfemalep1 + $sfemalep2 + $sfemalep3 + $sfemalep4 + $sfemalep5 + $sfemalep6 ;
		echo $sumpw ;  
		?>		</td>
        <td>
		<?php 
		$sump = $sumpm + $sumpw ;
		echo $sump ; ?>		</td>
        <td>
		<?php 
		$sumroomp = $sroomp6 + $sroomp5 + $sroomp4 + $sroomp3 + $sroomp2 + $sroomp1 ;
		echo $sumroomp ; ?>		</td>
      </tr>
      <tr>
        <td>มัธยมศึกษาปีที่ 1 </td>
		<?php
		$strSQLm1 = "SELECT * FROM  `tbm1` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQuerym1 = mysql_query($strSQLm1) or die ("Error Query [".$strSQLm1."]");
			$objResultm1 = mysql_fetch_array($objQuerym1);
		?>
        <td><?php echo $objResultm1["male"] ; ?></td>
        <td><?php echo $objResultm1["female"] ; ?></td>
        <td>
		<?php 	$sroomm1 = $objResultm1["room"] ;
			$smalem1 = $objResultm1["male"] ;
			$sfemalem1 = $objResultm1["female"] ;
			echo $smalem1 + $sfemalem1 ;
		 ?>		</td>
        <td><?php echo $objResultm1["room"] ; ?></td>
      </tr>
      <tr>
        <td>มัธยมศึกษาปีที่ 2 </td>
		<?php
		$strSQLm2 = "SELECT * FROM  `tbm2` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQuerym2 = mysql_query($strSQLm2) or die ("Error Query [".$strSQLm2."]");
			$objResultm2 = mysql_fetch_array($objQuerym2);
		?>
        <td><?php echo $objResultm2["male"] ; ?></td>
        <td><?php echo $objResultm2["female"] ; ?></td>
        <td>
		<?php 	$sroomm2 = $objResultm2["room"] ;
			$smalem2 = $objResultm2["male"] ;
			$sfemalem2 = $objResultm2["female"] ;
			echo $smalem2 + $sfemalem2 ;
		 ?>		</td>
        <td><?php echo $sroomm2 = $objResultm2["room"] ; ?></td>
		
      </tr>
      <tr>
        <td>มัธยมศึกษาปีที่ 3 </td>
		<?php
		$strSQLm3 = "SELECT * FROM  `tbm3` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQuerym3 = mysql_query($strSQLm3) or die ("Error Query [".$strSQLm3."]");
			$objResultm3 = mysql_fetch_array($objQuerym3);
		?>
        <td><?php echo $objResultm3["male"] ; ?></td>
        <td><?php echo $objResultm3["female"] ; ?></td>
        <td>
		<?php 	$sroomm3 = $objResultm3["room"] ;
			$smalem3 = $objResultm3["male"] ;
			$sfemalem3 = $objResultm3["female"] ;
			echo $smalem3 + $sfemalem3 ;
		 ?>		</td>
        <td><?php echo $objResultm3["room"] ; ?></td>
		
      </tr>
      <tr>
        <td>รวมระดับมัธยมศึกษาตอนต้น</td>
        <td>
		<?php 
		$summm = $smalem3 + $smalem2 + $smalem1 ;
		echo $summm ;
		 ?>		</td>
        <td>
		<?php 
		$summw = $sfemalem3 + $sfemalem2 + $sfemalem1 ;
		echo $summw ;
		 ?>		</td>
        <td>
		<?php 
		$summ = $summm + $summw ;
		echo $summ; ?>		</td>
        <td>
		<?php
		$sumroomm = $sroomm3 + $sroomm2 + $sroomm1 ;
		echo $sumroomm ;
		?>		</td>
      </tr>
      <tr>
        <td><div align="center">รวมทั้งสิน</div></td>
        <td>
		<?php
		$summale = $summm + $sumpm + $sumom ;
		echo $summale ;
		?>		</td>
        <td>
		<?php
		$sumfemale = $summw + $sumpw + $sumow ;
		echo $sumfemale ;
		?>		</td>
        <td>
		<?php
		$sumstudent = $summale + $sumfemale;
		echo $sumstudent ;
		?>		</td>
        <td>
		<?php
		$sumroom = $sumroomm + $sumroomp + $sumroomo ;
		echo $sumroom ;
		?>		</td>
      </tr>
      <tr>
        <td rowspan="2"><div align="center">บุคลากรในโรงเรียน</div></td>
        <td colspan="3"><div align="center">จำนวนบุคลากรในโรงเรียน</div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">ชาย</div></td>
        <td><div align="center">หญิง</div></td>
        <td><div align="center">รวม</div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>ข้าราชการครู(ปฏิบัติงานจริง)</td>
		<?php
		$strSQLteacher = "SELECT * FROM  `tbt` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQueryteacher = mysql_query($strSQLteacher) or die ("Error Query [".$strSQLteacher."]");
			$objResultteacher = mysql_fetch_array($objQueryteacher);
		?>
        <td><?php echo $objResultteacher["male"] ; ?></td>
        <td><?php echo $objResultteacher["female"] ; ?></td>
        <td>
		<?php 	$smaleteacher = $objResultteacher["male"] ;
			$sfemaleteacher = $objResultteacher["female"] ;
			echo $smaleteacher + $sfemaleteacher ;
		 ?>		</td>
        <td>&nbsp;</td>
		
      </tr>
      <tr>
        <td>พนักงานราชการ</td>
		<?php
		$strSQLemployee = "SELECT * FROM  `tbe` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQueryemployee = mysql_query($strSQLemployee) or die ("Error Query [".$strSQLemployee."]");
			$objResultemployee = mysql_fetch_array($objQueryemployee);
		?>
        <td><?php echo $objResultemployee["male"] ; ?></td>
        <td><?php echo $objResultemployee["female"] ; ?></td>
        <td>
		<?php 	$smaleemployee = $objResultemployee["male"] ;
			$sfemaleemployee = $objResultemployee["female"] ;
			echo $smaleemployee + $sfemaleemployee ;
		 ?>		</td>
        <td>&nbsp;</td>
		
      </tr>
      <tr>
        <td>ลูกจ้างประจำ(นักการภารโรง)</td>
		<?php
		$strSQLforeigner = "SELECT * FROM  `tbf` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQueryforeigner = mysql_query($strSQLforeigner) or die ("Error Query [".$strSQLforeigner."]");
			$objResultforeigner = mysql_fetch_array($objQueryforeigner);
		?>
        <td><?php echo $objResultforeigner["male"] ; ?></td>
        <td><?php echo $objResultforeigner["female"] ; ?></td>
        <td>
		<?php 	$smaleforeigner = $objResultforeigner["male"] ;
			$sfemaleforeigner = $objResultforeigner["female"] ;
			echo $smaleforeigner + $sfemaleforeigner ;
		 ?>		</td>
        <td>&nbsp;</td>
		
      </tr>
      <tr>
        <td>ลูกจ้างชั่วคราว</td>
		<?php
		$strSQLtemporary = "SELECT * FROM  `tbc` WHERE schoolid ='".$_SESSION['ses_username']."'";
		$objQuerytemporary = mysql_query($strSQLtemporary) or die ("Error Query [".$strSQLtemporary."]");
			$objResulttemporary = mysql_fetch_array($objQuerytemporary);
		?>
        <td><?php echo $objResulttemporary["male"] ; ?></td>
        <td><?php echo $objResulttemporary["female"] ; ?></td>
        <td>
		<?php 	$smaletemporary = $objResulttemporary["male"] ;
			$sfemaletemporary = $objResulttemporary["female"] ;
			echo $smaletemporary + $sfemaletemporary ;
		 ?>		</td>
        <td>&nbsp;</td>
		
      </tr>
      <tr>
        <td><div align="center">รวมทั้งสิ้น</div></td>
        <td>
		<?php  
		$sumemm = $smaletemporary + $smaleforeigner + $smaleemployee + $smaleteacher ;
		echo $sumemm ;
		?>		</td>
        <td>
		<?php  
		$sumemw = $sfemaletemporary + $sfemaleforeigner + $sfemaleemployee + $sfemaleteacher ;
		echo $sumemw ;
		?>		</td>
        <td>
		<?php
		$sumem = $sumemw + $sumemm ;
		echo $sumem ;
		?>		</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><div align="center">
		<input type="button" name="Button" value="แก้ไขข้อมูล" onClick="window.location.href='updatedata.php'">
		<input type="button" name="Button" value="พิมพ์เอกสาร" onClick="window.location.href='export_viewdata.php'">
        <input type="button" name="Button" value="ออกจากระบบ" onClick="window.location.href='logout.php'">
		<input type="button" name="Button" value="เปลี่ยนรหัสผ่าน" onClick="window.location.href='changpass.php'">
	</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</form></table></div>
<?php
}else{
	$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<meta http-equiv='refresh' content='0;URL=index.php'>";	
		 } 		
mysql_close($Conn);?>
</body>

</html>
