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
$disadvantaged = $_GET["txtdisadvantaged"];
if ($_GET["poorBookFlag"]=='true') {
	$poorBookFlag = '/' ;
}else{
	$poorBookFlag = '' ;
}
if ($_GET["poorFoodFlag"]=='true') {
	$poorFoodFlag = '/' ;
}else{
	$poorFoodFlag = '' ;
}
if ($_GET["poorStationeryFlag"]=='true') {
	$poorStationeryFlag = '/' ;
}else{
	$poorStationeryFlag = '' ;
}
if ($_GET["poorUniformFlag"]=='true') {
	$poorUniformFlag = '/' ;
}else{
	$poorUniformFlag = '' ;
}

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