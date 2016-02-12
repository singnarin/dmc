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
        <td width="214"><div align="center">ชาย</div></td>
        <td width="214"><div align="center">หญิง</div></td>
        <td width="101"><div align="center">รวม</div></td>
        </tr>
      <tr>
        <td>อนุบาล 1</td>
        <td>
          <input type="text" name="o1m" id="o1m" value=""/>        </td>
        <td><input type="text" name="o1w" id="o2w" value=""/></td>
        <td>&nbsp;</td>
        <td><input name="ro1" type="text" id="ro1" value="" /></td>
	  </tr>
      <tr>
        <td>อนุบาล 2</td>
        <td><input name="o2m" type="text" id="o2m" value="" /></td>
        <td><input name="o2w" type="text" id="o2w" value="" /></td>
        <td>&nbsp;</td>
        <td><input name="ro2" type="text" id="ro2" value="" /></td>
      </tr>
      <tr>
        <td>รวมระดับปฐมวัย</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>ประถมศึกษาปีที่ 1 </td>
        <td><input name="p1m" type="text" id="p1m" value="" /></td>
        <td><input name="p1w" type="text" id="p1w" value="" /></td>
        <td>&nbsp;</td>
        <td><input name="rp1" type="text" id="rp1" value="" /></td>
      </tr>
      <tr>
        <td>ประถมศึกษาปีที่ 2 </td>
        <td><input name="p2m" type="text" id="p2m" value="" /></td>
        <td><input name="p2w" type="text" id="p2w" value="" /></td>
        <td>&nbsp;</td>
        <td><input name="rp2" type="text" id="rp2" value="" /></td>
      </tr>
      <tr>
        <td>ประถมศึกษาปีที่ 3 </td>
        <td><input name="p3m" type="text" id="p3m" value="" /></td>
        <td><input name="p3w" type="text" id="p3w" value="" /></td>
        <td>&nbsp;</td>
        <td><input name="rp3" type="text" id="rp3" value="" /></td>
      </tr>
      <tr>
        <td>ประถมศึกษาปีที่ 4 </td>
		<td><input name="p4m" type="text" id="p4m" value="" /></td>
        <td><input name="p4w" type="text" id="p4w" value="" /></td>
        <td>&nbsp;</td>
        <td><input name="rp4" type="text" id="rp4" value="" /></td>
      </tr>
      <tr>
        <td>ประถมศึกษาปีที่ 5 </td>
        <td><input name="p5m" type="text" id="p5m" value="" /></td>
        <td><input name="p5w" type="text" id="p5w" value="" /></td>
        <td>&nbsp;</td>
        <td><input name="rp5" type="text" id="rp5" value="" /></td>
      </tr>
      <tr>
        <td>ประถมศึกษาปีที่ 6 </td>
        <td><input name="p6m" type="text" id="p6m"  value=""/></td>
        <td><input name="p6w" type="text" id="p6w" value=""/></td>
        <td>&nbsp;</td>
        <td><input name="rp6" type="text" id="rp6" value=""/></td>
      </tr>
      <tr>
        <td>รวมระดับประถมศึกษา</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>มัธยมศึกษาปีที่ 1 </td>
        <td><input name="m1m" type="text" id="m1m" value="" /></td>
        <td><input name="m1w" type="text" id="m1w" value="" /></td>
        <td>&nbsp;</td>
        <td><input name="rm1" type="text" id="rm1" value="" /></td>
      </tr>
      <tr>
        <td>มัธยมศึกษาปีที่ 2 </td>
        <td><input name="m2m" type="text" id="m2m"  value=""/></td>
        <td><input name="m2w" type="text" id="m2w" value="" /></td>
        <td>&nbsp;</td>
        <td><input name="rm2" type="text" id="rm2" value="" /></td>
      </tr>
      <tr>
        <td>มัธยมศึกษาปีที่ 3 </td>
        <td><input name="m3m" type="text" id="m3m"  value=""/></td>
        <td><input name="m3w" type="text" id="m3w" value="" /></td>
        <td>&nbsp;</td>
        <td><input name="rm3" type="text" id="rm3"  value=""/></td>
      </tr>
      <tr>
        <td>รวมระดับมัธยมศึกษาตอนต้น</td>
        <td></td>
        <td></td>
        <td>&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td><div align="center">รวมทั้งสิน</div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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
        <td><input name="tm" type="text" id="tm" value=""/></td>
        <td><input name="tw" type="text" id="tw" value=""/></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>พนักงานราชการ</td>
        <td><input name="em" type="text" id="em" value="" /></td>
        <td><input name="ew" type="text" id="ew" value=""/></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>ลูกจ้างประจำ(นักการภารโรง)</td>
        <td><input name="fm" type="text" id="fm" value="" /></td>
        <td><input name="fw" type="text" id="fw" value="" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>ลูกจ้างชั่วคราว</td>
        <td><input name="cm" type="text" id="cm" value="" /></td>
        <td><input name="cw" type="text" id="cw" value="" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">รวมทั้งสิ้น</div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
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
    <td>&nbsp;</td>
  </tr>
</form></table></div>


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
