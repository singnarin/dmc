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
$disadvantaged = $_POST["txtdisadvantaged"];
if ($_POST["poorBookFlag"]=='true') {
	$poorBookFlag = '/' ;
}else{
	$poorBookFlag = '' ;
}
if ($_POST["poorFoodFlag"]=='true') {
	$poorFoodFlag = '/' ;
}else{
	$poorFoodFlag = '' ;
}
if ($_POST["poorStationeryFlag"]=='true') {
	$poorStationeryFlag = '/' ;
}else{
	$poorStationeryFlag = '' ;
}
if ($_POST["poorUniformFlag"]=='true') {
	$poorUniformFlag = '/' ;
}else{
	$poorUniformFlag = '' ;
}
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
		if($disadvantaged !=''){
			$strSQL .= " AND disadvantaged LIKE '%".$disadvantaged."%' ";
		}
		if($poorBookFlag !=''){
			$strSQL .= " AND textbooks = '/'";
		}
		if($poorFoodFlag !=''){
			$strSQL .= " AND Lunch = '/'";
		}
		if($poorStationeryFlag !=''){
			$strSQL .= " AND stationery ='/'";
		}
		if($poorUniformFlag !=''){
			$strSQL .= " AND uniform = '/'";
		}
		
		$strSQL .= " ORDER BY `schoolID` ASC";
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
		<th>ความด้อยโอกาส</th>
		<th>ขาดแคลนแบบเรียน</th>
		<th>ขาดแคลนอาหารกลางวัน</th>
		<th>ขาดแคลนเครื่องเขียน</th>
		<th>ขาดแคลนเครื่องแบบ</th>
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
		<td><?php echo $objResult['disadvantaged'];?></td>
		<td><?php echo $objResult['textbooks'];?></td>
		<td><?php echo $objResult['Lunch'];?></td>
		<td><?php echo $objResult['stationery'];?></td>
		<td><?php echo $objResult['uniform'];?></td>
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