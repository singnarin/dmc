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
echo $_FILES["fileCSV"];

/*if ($_SESSION['ses_username']!=""){	
move_uploaded_file($_FILES["fileCSV"]["tmp_name"],$_FILES["fileCSV"]["name"]); // Copy/Upload CSV

$objCSV = fopen($_FILES["fileCSV"]["name"], "r");
while (($objArr = fgetcsv($objCSV, 10000, ",")) !== FALSE) {
	$strSQL = "INSERT INTO dmc ";
	$strSQL .="(schoolID,schoolName,empID,class,room,studentID,sex,Tstudent,Nstudent,Lstudent,NstudentE,LstudentE,birthday,Yage,Mage,blood,nationnal,nationnallity,religion,Obrother,Sbrother,Osisters,Ssisters,Aschild,status_parents,empID_Father,Tfather,Nfather,Sfather,income_father,Tel_father,empID_Mothers,Tmothers,Nmother,Lmother,income_mothers,Tel_mothers,parents_student,empID_Parents,Tparents,NParents,LParents,income_parents.,Tel_parents,IDHouseOri,AtOri,CategoryOri,StreetOri,tambolOri,DistrictOri,ProvinceOri,PostcodeOri,telephoneOri,IDHouse,At,Category,Street,tombol,District,Province,postcode,telephone,Weight,height,disadvantaged,bedroom,uniform,stationery,textbooks,Lunch,disability,gravel,paved.,water,Timehomeschool,Getschoolstyle) ";
	$strSQL .="VALUES ";
	$strSQL .="('".$objArr[0]."','".$objArr[1]."','".$objArr[2]."','".$objArr[3]."','".$objArr[4]."','".$objArr[5]."','".$objArr[6]."','".$objArr[7]."','".$objArr[8]."','".$objArr[9]."','".$objArr[10]."','".$objArr[11]."','".$objArr[12]."','".$objArr[13]."','".$objArr[14]."','".$objArr[15]."','".$objArr[16]."','".$objArr[17]."','".$objArr[18]."','".$objArr[19]."','".$objArr[20]."','".$objArr[21]."','".$objArr[22]."','".$objArr[23]."','".$objArr[24]."','".$objArr[25]."','".$objArr[26]."','".$objArr[27]."','".$objArr[28]."','".$objArr[29]."','".$objArr[30]."','".$objArr[31]."','".$objArr[32]."','".$objArr[33]."','".$objArr[34]."','".$objArr[35]."','".$objArr[36]."','".$objArr[37]."','".$objArr[38]."','".$objArr[39]."','".$objArr[40]."','".$objArr[41]."','".$objArr[42]."','".$objArr[43]."','".$objArr[44]."','".$objArr[45]."','".$objArr[46]."','".$objArr[47]."','".$objArr[48]."','".$objArr[49]."','".$objArr[50]."','".$objArr[51]."','".$objArr[52]."','".$objArr[53]."','".$objArr[54]."','".$objArr[55]."','".$objArr[56]."','".$objArr[57]."','".$objArr[58]."','".$objArr[59]."','".$objArr[60]."','".$objArr[61]."','".$objArr[62]."','".$objArr[63]."','".$objArr[64]."','".$objArr[65]."','".$objArr[66]."','".$objArr[67]."','".$objArr[68]."','".$objArr[69]."','".$objArr[70]."','".$objArr[71]."','".$objArr[72]."','".$objArr[73]."','".$objArr[74]."','".$objArr[75]."') ";
	$objQuery = mysql_query($strSQL);
}
fclose($objCSV);

echo "Upload & Import Done.";
}else{
		$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
		} 
mysql_close($Conn); 
*/?>
</table>
</body>
</html>