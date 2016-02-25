<?php
include("../include/connect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Real Time Data Managment</title>
</head>
<body>
<?php

if ($_SESSION['ses_username']!=""){	

if ($_FILES["fileCSV"]["error"]>0){
	$message = "ยังไม่ได้เลือกไฟล์ หรือเกิดข้อพิดพลาด โปรดตรวจสอบ";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
}else{


move_uploaded_file($_FILES["fileCSV"]["tmp_name"],'D:\xampp\htdocs\dmc\dmc\Upload\\'.$_FILES["fileCSV"]["name"]); // Copy/Upload CSV

$objCSV = fopen('Upload\\'.$_FILES["fileCSV"]["name"], "r");
while (($objArr = fgetcsv($objCSV, 3000, ",")) !== FALSE) {

	$sel_dmc = mysql_query("SELECT * FROM `dmc` WHERE `empID` = '".$objArr[2]."'");
	$count = mysql_num_rows($sel_dmc);

	if($count == '1'){
		$update_dmc = mysql_query("UPDATE `dmc` SET `schoolID` = '".$objArr[0]."', `schoolName` = '".$objArr[1]."', `class` = '".$objArr[3]."', `room` = '".$objArr[4]."', `studentID` = '".$objArr[5]."', `sex` = '".$objArr[6]."', `Tstudent` = '".$objArr[7]."', `Nstudent` = '".$objArr[8]."', `Lstudent` = '".$objArr[9]."', `NstudentE` = '".$objArr[10]."', `LstudentE` = '".$objArr[11]."', `birthday` = '".$objArr[12]."', `Yage` = '".$objArr[13]."', `Mage` = '".$objArr[14]."', `blood` = '".$objArr[15]."', `nationnal` = '".$objArr[16]."', `nationnallity` = '".$objArr[17]."', `religion` = '".$objArr[18]."', `Obrother` = '".$objArr[19]."', `Sbrother` = '".$objArr[20]."', `Osisters` = '".$objArr[21]."', `Ssisters` = '".$objArr[22]."', `Aschild` = '".$objArr[23]."', `status_parents` = '".$objArr[24]."', `empID_Father` = '".$objArr[25]."', `Tfather` = '".$objArr[26]."', `Nfather` = '".$objArr[27]."', `Sfather` = '".$objArr[28]."', `income_father` = '".$objArr[29]."', `Tel_father` = '".$objArr[30]."', `empID_Mothers` = '".$objArr[31]."', `Tmothers` = '".$objArr[32]."', `Nmother` = '".$objArr[33]."', `Lmother` = '".$objArr[34]."', `income_mothers` = '".$objArr[35]."', `Tel_mothers` = '".$objArr[36]."', `parents_student` = '".$objArr[37]."', `empID_Parents` = '".$objArr[38]."', `Tparents` = '".$objArr[39]."', `NParents` = '".$objArr[40]."', `LParents` = '".$objArr[41]."', `income_parents.` = '".$objArr[42]."', `Tel_parents` = '".$objArr[43]."', `IDHouseOri` = '".$objArr[44]."', `AtOri` = '".$objArr[45]."', `CategoryOri` = '".$objArr[46]."', `StreetOri` = '".$objArr[47]."', `tambolOri` = '".$objArr[48]."', `DistrictOri` = '".$objArr[49]."', `ProvinceOri` = '".$objArr[50]."', `PostcodeOri` = '".$objArr[51]."', `telephoneOri` = '".$objArr[52]."', `IDHouse` = '".$objArr[53]."', `At` = '".$objArr[54]."', `Category` = '".$objArr[55]."', `Street` = '".$objArr[56]."', `tombol` = '".$objArr[57]."', `District` = '".$objArr[58]."', `Province` = '".$objArr[59]."', `postcode` = '".$objArr[60]."', `telephone` = '".$objArr[61]."', `Weight` = '".$objArr[62]."', `height` = '".$objArr[63]."', `disadvantaged` = '".$objArr[64]."', `bedroom` = '".$objArr[65]."', `uniform` = '".$objArr[66]."', `stationery` = '".$objArr[67]."', `textbooks` = '".$objArr[68]."', `Lunch` = '".$objArr[69]."', `disability` = '".$objArr[70]."', `gravel` = '".$objArr[71]."', `paved` = '".$objArr[72]."', `water` = '".$objArr[73]."', `Timehomeschool` = '".$objArr[74]."', `Getschoolstyle` = '".$objArr[75]."'  WHERE `empID` = '".$objArr[2]."'");
	}else{

	$strSQL = "INSERT INTO dmc ";
	$strSQL .="(`schoolID`,`schoolName`,`empID`,`class`,`room`,`studentID`,`sex`,`Tstudent`,`Nstudent`,`Lstudent`,`NstudentE`,`LstudentE`,`birthday`,`Yage`,`Mage`,`blood`,`nationnal`,`nationnallity`,`religion`,`Obrother`,`Sbrother`,`Osisters`,`Ssisters`,`Aschild`,`status_parents`,`empID_Father`,`Tfather`,`Nfather`,`Sfather`,`income_father`,`Tel_father`,`empID_Mothers`,`Tmothers`,`Nmother`,`Lmother`,`income_mothers`,`Tel_mothers`,`parents_student`,`empID_Parents`,`Tparents`,`NParents`,`LParents`,`income_parents.`,`Tel_parents`,`IDHouseOri`,`AtOri`,`CategoryOri`,`StreetOri`,`tambolOri`,`DistrictOri`,`ProvinceOri`,`PostcodeOri`,`telephoneOri`,`IDHouse`,`At`,`Category`,`Street`,`tombol`,`District`,`Province`,`postcode`,`telephone`,`Weight`,`height`,`disadvantaged`,`bedroom`,`uniform`,`stationery`,`textbooks`,`Lunch`,`disability`,`gravel`,`paved`,`water`,`Timehomeschool`,`Getschoolstyle`) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$objArr[0]."','".$objArr[1]."','".$objArr[2]."','".$objArr[3]."','".$objArr[4]."','".$objArr[5]."','".$objArr[6]."','".$objArr[7]."','".$objArr[8]."','".$objArr[9]."','".$objArr[10]."','".$objArr[11]."','".$objArr[12]."','".$objArr[13]."','".$objArr[14]."','".$objArr[15]."','".$objArr[16]."','".$objArr[17]."','".$objArr[18]."','".$objArr[19]."','".$objArr[20]."','".$objArr[21]."','".$objArr[22]."','".$objArr[23]."','".$objArr[24]."','".$objArr[25]."','".$objArr[26]."','".$objArr[27]."','".$objArr[28]."','".$objArr[29]."','".$objArr[30]."','".$objArr[31]."','".$objArr[32]."','".$objArr[33]."','".$objArr[34]."','".$objArr[35]."','".$objArr[36]."','".$objArr[37]."','".$objArr[38]."','".$objArr[39]."','".$objArr[40]."','".$objArr[41]."','".$objArr[42]."','".$objArr[43]."','".$objArr[44]."','".$objArr[45]."','".$objArr[46]."','".$objArr[47]."','".$objArr[48]."','".$objArr[49]."','".$objArr[50]."','".$objArr[51]."','".$objArr[52]."','".$objArr[53]."','".$objArr[54]."','".$objArr[55]."','".$objArr[56]."','".$objArr[57]."','".$objArr[58]."','".$objArr[59]."','".$objArr[60]."','".$objArr[61]."','".$objArr[62]."','".$objArr[63]."','".$objArr[64]."','".$objArr[65]."','".$objArr[66]."','".$objArr[67]."','".$objArr[68]."','".$objArr[69]."','".$objArr[70]."','".$objArr[71]."','".$objArr[72]."','".$objArr[73]."','".$objArr[74]."','".$objArr[75]."') ";
	$objQuery = mysql_query($strSQL);

		}
		echo $count."<br>".$objArr[72];
}
fclose($objCSV);

$message = "นำเข้าข้อมูลนักเรียนรายบุคคลสำเร็จ";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
	}
}else{
		$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
		} 
mysql_close($Conn); 
?>
</table>
</body>
</html>