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
$marriageStatusCode = $_POST["marriageStatusCode"];
$nationCode = $_POST["nationCode"];
$raceCode = $_POST["raceCode"];
$religionCode = $_POST['religionCode'];
$bloodCode = $_POST["bloodCode"];
$parentFamilyRelation = $_POST["parentFamilyRelation"];
$txtCategoryOri = $_POST["txtCategoryOri"];
$txttambolOri = $_POST["txttambolOri"];
$txtDistrictOri = $_POST["txtDistrictOri"];
$txtProvinceOri = $_POST["txtProvinceOri"];
$txtbirthYear = $_POST["txtbirthYear"];
$txtyearOld = $_POST["txtyearOld"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Real Time Data Managment</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
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
		if($marriageStatusCode !=''){
			$strSQL .= " AND status_parents LIKE '%".$marriageStatusCode."%' ";
		}
		if($nationCode !=''){
			$strSQL .= " AND nationnal = '".$nationCode."'"; 
		}
		if($raceCode !=''){
			$strSQL .= " AND nationnallity = '".$raceCode."'";
		}
		if($religionCode !=''){
			$strSQL .= " AND religion = '".$religionCode."'";
		}
		if($bloodCode !=''){
			$strSQL .= " AND blood = '".$bloodCode."'";
		}
		if($parentFamilyRelation !=''){
			$strSQL .= " AND parents_student = '".$parentFamilyRelation."'";
		}
		if($txtCategoryOri !=''){
			$strSQL .= " AND CategoryOri LIKE '%".$txtCategoryOri."%' ";
		}
		if($txttambolOri !=''){
			$strSQL .= " AND tambolOri LIKE '%".$txttambolOri."%' ";
		}
		if($txtDistrictOri !=''){
			$strSQL .= " AND DistrictOri LIKE '%".$txtDistrictOri."%' ";
		}
		if($txtProvinceOri  !=''){
			$strSQL .= " AND ProvinceOri LIKE '%".$txtProvinceOri ."%'";
		}
		if($txtbirthYear  !=''){
			$strSQL .= " AND SUBSTRING( `birthday` , -4 ) = '".$txtbirthYear."'";
		}
		if($txtyearOld  !=''){
			$strSQL .= " AND LEFT( curdate( ) , 4 ) + 543 - SUBSTRING( `birthday` , -4 ) = '".$txtyearOld."'";
		}
		
		$strSQL .= " ORDER BY `schoolID` ASC , `class` ASC ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table class="table table-bordered" >
		<tr>
		<th rowspan="2">ลำดับลำดับ</th>
		<th rowspan="2">โรงเรียนโรงเรียน</th>
		<th rowspan="2">ชั้นชั้น</th>
		<th rowspan="2">ห้องห้อง</th>
		<th rowspan="2">เลขประจำตัวประชาชนเลขประจำตัวประชาชน</th>
		<th rowspan="2">เลขประจำตัวนักเรียนเลขประจำตัวนักเรียน</th>
		<th rowspan="2">คำนำหน้าชื่อคำนำหน้าชื่อ</th>
		<th rowspan="2">ชื่อชื่อ</th>
		<th rowspan="2">นามสกุลนามสกุล</th>
		<th rowspan="2">วันเกิด</th>
		<th rowspan="2">สถานะภาพสมรสบิดามารดาสถานะภาพสมรสบิดามารดา</th>
		<th rowspan="2">สัญชาติสัญชาติ</th>
		<th rowspan="2">เชื้อชาติเชื้อชาติ</th>
		<th rowspan="2">ศาสนาศาสนา</th>
		<th rowspan="2">หมู่โลหิตหมู่โลหิต</th>
		<th rowspan="2">ความเกี่ยวข้องกับผู้ปกครองความเกี่ยวข้องกับผู้ปกครอง</th>
		<th colspan="4">ที่อยู่ตามทะเบียนบ้าน</th>
	</tr>
	<tr>
		<th>หมู่</th>
		<th>ตำบล</th>
		<th>อำเภอ</th>
		<th>จังหวัด</th>
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
		<td><?php echo $objResult['birthday'];?></td>
		<td><?php echo $objResult['status_parents'];?></td>
		<td><?php echo $objResult['nationnal'];?></td>
		<td><?php echo $objResult['nationnallity'];?></td>
		<td><?php echo $objResult['religion'];?></td>
		<td><?php echo $objResult['blood'];?></td>
		<td><?php echo $objResult['parents_student'];?></td>
		<td><?php echo $objResult['CategoryOri'];?></td>
		<td><?php echo $objResult['tambolOri'];?></td>
		<td><?php echo $objResult['DistrictOri'];?></td>
		<td><?php echo $objResult['ProvinceOri'];?></td>
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