<?php
include("../include/connect.php");
session_start();

$school = $_POST["txtschool"];
$studentID = $_POST["txtstudentID"];
$empID = $_POST["txtempID"];
$class = $_POST["txtclass"];
$room = $_POST["txtroom"];
$Nstudent = $_POST["txtNstudent"];
$Lstudent = $_POST["txtLstudent"];
$beginWeight = $_POST["txtbeginWeight"];
$endWeight = $_POST["txtendWeight"];
$beginHeight = $_POST["txtbeginHeight"];
$endHeight = $_POST["txtendHeight"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Real Time Data Managment</title>
</head>
<body>
<div align="center">
<?php
$strSQL = "SELECT * FROM dmc WHERE 1 ";
	if($school !='' and $studentID =='' and $empID =='' and $class =='' and $room ==''and $Nstudent ==''and $Lstudent ==''and $beginWeight ==''and $endWeight ==''and $beginHeight ==''and $endHeight ==''){
			$strSQL .= " AND schoolName LIKE '%".$school."%'";
		}else if($school =='' and $studentID !='' and $empID =='' and $class =='' and $room ==''and $Nstudent ==''and $Lstudent ==''and $beginWeight ==''and $endWeight ==''and $beginHeight ==''and $endHeight ==''){
			$strSQL .= " AND studentID LIKE '%".$studentID."%' ";
		}else if($school =='' and $studentID =='' and $empID !='' and $class =='' and $room ==''and $Nstudent ==''and $Lstudent ==''and $beginWeight ==''and $endWeight ==''and $beginHeight ==''and $endHeight ==''){
			$strSQL .= " AND empID LIKE '%".$empID."%' ";
		}else if($school =='' and $studentID =='' and $empID =='' and $class !='' and $room ==''and $Nstudent ==''and $Lstudent ==''and $beginWeight ==''and $endWeight ==''and $beginHeight ==''and $endHeight ==''){
			$strSQL .= " AND class = '".$class."'";
		}else if($school !='' and $studentID =='' and $empID =='' and $class !='' and $room ==''and $Nstudent ==''and $Lstudent ==''and $beginWeight ==''and $endWeight ==''and $beginHeight ==''and $endHeight ==''){
			$strSQL .= " AND schoolName LIKE '%".$school."%' AND class = '".$class."'";
		}else if($school =='' and $studentID =='' and $empID =='' and $class =='' and $room !=''and $Nstudent ==''and $Lstudent ==''and $beginWeight ==''and $endWeight ==''and $beginHeight ==''and $endHeight ==''){
			$strSQL .= " AND room LIKE '%".$room."%' ";
		}else if($school =='' and $studentID =='' and $empID =='' and $class =='' and $room ==''and $Nstudent !=''and $Lstudent ==''and $beginWeight ==''and $endWeight ==''and $beginHeight ==''and $endHeight ==''){
			$strSQL .= " AND Nstudent LIKE '%".$Nstudent."%' ";
		}else if($school =='' and $studentID =='' and $empID =='' and $class =='' and $room ==''and $Nstudent ==''and $Lstudent !=''and $beginWeight ==''and $endWeight ==''and $beginHeight ==''and $endHeight ==''){
			$strSQL .= " AND Lstudent LIKE '%".$Lstudent."%' ";
		}else if($school =='' and $studentID =='' and $empID =='' and $class =='' and $room ==''and $Nstudent ==''and $Lstudent ==''and $beginWeight !=''and $endWeight ==''and $beginHeight ==''and $endHeight ==''){
			$strSQL .= " AND Weight >= ".$beginWeight."";
		}else if($school =='' and $studentID =='' and $empID =='' and $class =='' and $room ==''and $Nstudent ==''and $Lstudent ==''and $beginWeight ==''and $endWeight ==''and $beginHeight !=''and $endHeight ==''){
			$strSQL .= " AND height >= ".$beginHeight."";
		}else if($school =='' and $studentID =='' and $empID =='' and $class =='' and $room ==''and $Nstudent ==''and $Lstudent ==''and $beginWeight ==''and $endWeight !=''and $beginHeight ==''and $endHeight ==''){
			$strSQL .= " AND Weight <= ".$endWeight."";
		}else if($school =='' and $studentID =='' and $empID =='' and $class =='' and $room ==''and $Nstudent ==''and $Lstudent ==''and $beginWeight ==''and $endWeight ==''and $beginHeight ==''and $endHeight !=''){
			$strSQL .= " AND height <= ".$endHeight."";
		}else if($school =='' and $studentID =='' and $empID =='' and $class =='' and $room ==''and $Nstudent ==''and $Lstudent ==''and $beginWeight !=''and $endWeight !=''and $beginHeight ==''and $endHeight ==''){
			$strSQL .= " AND Weight BETWEEN ".$beginWeight." AND ".$endWeight."";
		}else if($school =='' and $studentID =='' and $empID =='' and $class =='' and $room ==''and $Nstudent ==''and $Lstudent ==''and $beginWeight ==''and $endWeight ==''and $beginHeight !=''and $endHeight !=''){
			$strSQL .= " AND height BETWEEN ".$beginHeight." AND ".$endHeight."";
		}
		$strSQL .= " ORDER BY `schoolID` ASC";
		echo $strSQL;
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

echo "$school = ". $_POST["txtschool"].
"$studentID = ".$_POST["txtstudentID"].
"$empID = ".$_POST["txtempID"].
"$class = ".$_POST["txtclass"].
"$room = ".$_POST["txtroom"].
"$Nstudent = ".$_POST["txtNstudent"].
"$Lstudent = ".$_POST["txtLstudent"].
"$beginWeight = ".$_POST["txtbeginWeight"].
"$endWeight = ".$_POST["txtendWeight"].
"$beginHeight = ".$_POST["txtbeginHeight"].
"$endHeight = ".$_POST["txtendHeight"];
?>
<table border="1" bordercolor="#000000" style="border-collapse:collapse;" >
	<tr>
		<th>ลำดับ</th>
		<th>โรงเรียน</th>
		<th>ชั้น</th>
		<th>ห้อง</th>
		<th>เลขประจำตัวประชาชน</th>
		<th>เลขประจำตัวนักเรียน</th>
		<th>คำนำหน้าชื่อ</th>
		<th>ชื่อ</th>
		<th>นามสกุล</th>
		<th>น้ำหนัก</th>
		<th>ส่วนสูง</th>
	</tr>
<?php
$i = 1 ;
while($objResult = mysql_fetch_array($objQuery))
{
?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $objResult['schoolName'];?></td>
		<td><?php echo $objResult['class'];?></td>
		<td><?php echo $objResult['room'];?></td>
		<td><?php echo $objResult['empID'];?></td>
		<td><?php echo $objResult['studentID'];?></td>
		<td><?php echo $objResult['Tstudent'];?></td>
		<td><?php echo $objResult['Nstudent'];?></td>
		<td><?php echo $objResult['Lstudent'];?></td>
		<td><?php echo $objResult['Weight'];?></td>
		<td><?php echo $objResult['height'];?></td>
	</tr>
<?php
	$i++;
}
mysql_close($Conn);
?>
</table>
</div>
</body>
</html>