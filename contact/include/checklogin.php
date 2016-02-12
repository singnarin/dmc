<?php
$loginid = $_POST[loginid];
$password = $_POST[password];
include ("include/connect.php");         //เรียก function สำหรับติดต่อฐานข้อมูลจากหน้า connect.php ขึ้นมา
$check_log = mysql_query("SELECT * FROM `tbschool` WHERE  `schoolid` = '$loginid' AND `password` = '$password'");
$num = mysql_num_rows($check_log);
	echo $num;
	echo "555";
?>