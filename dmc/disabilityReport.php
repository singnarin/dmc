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
$disability = $_POST["txtdisability"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
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
		if($disability !=''){
			$strSQL .= " AND disability LIKE '%".$disability."%' ";
		}
		
		$strSQL .= " ORDER BY `schoolID` ASC , `class` ASC ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table class="table table-bordered" >
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
		<th>ความพิการ</th>
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
		<td><?php echo $objResult['disability'];?></td>
	</tr>
<?php
	$i++;
}
mysql_close($Conn);
?>
</table>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>