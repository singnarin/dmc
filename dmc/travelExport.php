<?php
include("../include/connect.php");
session_start();
header("Content-Type: application/vnd.ms-excel");
$date = date("Y-m-d");
header('Content-Disposition: attachment; filename="'.$date.'.xls"');

$school = $_GET["txtschool"];
$studentID = $_GET["txtstudentID"];
$empID = $_GET["txtempID"];
$class = $_GET["txtclass"];
$room = $_GET["txtroom"];
$Nstudent = $_GET["txtNstudent"];
$Lstudent = $_GET["txtLstudent"];
$travel = $_GET["txttravel"];
$beginTime = $_GET["txtbeginTime"];
$beginGravel = $_GET["txtbeginGravel"];
$beginpaved = $_GET["txtbeginpaved"];
$beginwater = $_GET["txtbeginwater"];
$endTime = $_GET["txtendTime"];
$endGraval = $_GET["txtendGravel"];
$endpaved = $_GET["txtendpaved"];
$endwater = $_GET["txtendwater"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Real Time Data Managment</title>
</head>
<body>
<div align="center">
<?php
$strSQL = "SELECT * FROM dmc WHERE 1 ";
	if($school !='' ){
			$strSQL .= " AND schoolName LIKE '%".$school."%'";
		}
		if($studentID !=''){
			$strSQL .= " AND studentID = '".$studentID."'";
		}
		if($empID !=''){
			$strSQL .= " AND empID = '".$empID."'";
		}
		if($class !=''){
			$strSQL .= " AND class = '".$class."'";
		}
		if($room !=''){
			$strSQL .= " AND room = '".$room."'";
		}
		if($Nstudent !=''){
			$strSQL .= " AND Nstudent LIKE '%".$Nstudent."%' ";
		}
		if($Lstudent !=''){
			$strSQL .= " AND Lstudent LIKE '%".$Lstudent."%' ";
		}
		if($travel !=''){
			$strSQL .= " AND Getschoolstyle LIKE '%".$travel."%'";
		}
		if($beginTime !=''){
			$strSQL .= " AND Timehomeschool >= ".$beginTime."";
		}
		if($endTime !=''){
			$strSQL .= " AND Timehomeschool <= ".$endTime."";
		}
		if($beginTime !=''and $endTime !=''){
			$strSQL .= " AND Timehomeschool BETWEEN ".$beginTime." AND ".$endTime."";
		}
		if($beginGravel !=''){
			$strSQL .= " AND gravel >= ".$beginGravel."";
		}
		if($endGraval !=''){
			$strSQL .= " AND gravel <= ".$endGraval."";
		}
		if($beginGravel !=''and $endGraval !=''){
			$strSQL .= " AND gravel BETWEEN ".$beginGravel." AND ".$endGraval."";
		}
		if($beginpaved !=''){
			$strSQL .= " AND paved >= ".$beginpaved."";
		}
		if($endpaved !=''){
			$strSQL .= " AND paved <= ".$endpaved."";
		}
		if($beginpaved !=''and $endpaved !=''){
			$strSQL .= " AND paved BETWEEN ".$beginpaved." AND ".$endpaved."";
		}
		if($beginwater !=''){
			$strSQL .= " AND water >= ".$water."";
		}
		if($endwater !=''){
			$strSQL .= " AND water <= ".$endwater."";
		}
		if($beginwater !=''and $endwater !=''){
			$strSQL .= " AND water BETWEEN ".$beginwater." AND ".$endwater."";
		}
		$strSQL .= " ORDER BY `schoolID` ASC , `class` ASC ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table border="1" bordercolor="#0000ff" style="border-collapse:collapse;" >
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
		<th>การเดินทาง(นาที)</th>
		<th>เวลาเดินทาง(นาที)</th>
		<th>ถนนลูกรัง(เมตร)</th>
		<th>ถนนลาดยาง(เมตร)</th>
		<th>ทางน้ำ(เมตร)</th>
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
		<td><?php echo $objResult['Getschoolstyle'];?></td>
		<td><?php echo $objResult['Timehomeschool'];?></td>
		<td><?php echo $objResult['gravel'];?></td>
		<td><?php echo $objResult['paved'];?></td>
		<td><?php echo $objResult['water'];?></td>
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