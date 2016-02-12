<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("include/connect.php");
session_start();

$schoolid = $_SESSION['ses_username'];

$o1m = $_POST['o1m'];
$o1w = $_POST['o1w'];
$ro1 = $_POST['ro1'];

$o2m = $_POST['o2m'];
$o2w = $_POST['o2w'];
$ro2 = $_POST['ro2'];

$p1m = $_POST['p1m'];
$p1w = $_POST['p1w'];
$rp1 = $_POST['rp1'];

$p2m = $_POST['p2m'];
$p2w = $_POST['p2w'];
$rp2 = $_POST['rp2'];

$p3m = $_POST['p3m'];
$p3w = $_POST['p3w'];
$rp3 = $_POST['rp3'];

$p4m = $_POST['p4m'];
$p4w = $_POST['p4w'];
$rp4 = $_POST['rp4'];

$p5m = $_POST['p5m'];
$p5w = $_POST['p5w'];
$rp5 = $_POST['rp5'];

$p6m = $_POST['p6m'];
$p6w = $_POST['p6w'];
$rp6 = $_POST['rp6'];

$m1m = $_POST['m1m'];
$m1w = $_POST['m1w'];
$rm1 = $_POST['rm1'];

$m2m = $_POST['m2m'];
$m2w = $_POST['m2w'];
$rm2 = $_POST['rm2'];

$m3m = $_POST['m3m'];
$m3w = $_POST['m3w'];
$rm3 = $_POST['rm3'];

$tm = $_POST['tm'];
$tw = $_POST['tw'];

$em = $_POST['em'];
$ew = $_POST['ew'];

$fm = $_POST['fm'];
$fw = $_POST['fw'];

$cm = $_POST['cm'];
$cw = $_POST['cw'];

$sql_addo1 = "insert into tbo1(schoolid, male, female, room) values ('$schoolid', '$o1m', '$o1w', '$ro1')";
mysql_query($sql_addo1) or die(mysql_error());

$sql_addo2 = "insert into tbo2(schoolid, male, female, room) values ('$schoolid', '$o2m', '$o2w', '$ro2')";
mysql_query($sql_addo2) or die(mysql_error());

$sql_addp1 = "insert into tbp1(schoolid, male, female, room) values ('$schoolid', '$p1m', '$p1w', '$rp1')";
mysql_query($sql_addp1) or die(mysql_error());

$sql_addp2 = "insert into tbp2(schoolid, male, female, room) values ('$schoolid', '$p2m', '$p2w', '$rp2')";
mysql_query($sql_addp2) or die(mysql_error());

$sql_addp3 = "insert into tbp3(schoolid, male, female, room) values ('$schoolid', '$p3m', '$p3w', '$rp3')";
mysql_query($sql_addp3) or die(mysql_error());

$sql_addp4 = "insert into tbp4(schoolid, male, female, room) values ('$schoolid', '$p4m', '$p4w', '$rp4')";
mysql_query($sql_addp4) or die(mysql_error());

$sql_addp5 = "insert into tbp5(schoolid, male, female, room) values ('$schoolid', '$p5m', '$p5w', '$rp5')";
mysql_query($sql_addp5) or die(mysql_error());

$sql_addp6 = "insert into tbp6(schoolid, male, female, room) values ('$schoolid', '$p6m', '$p6w', '$rp6')";
mysql_query($sql_addp6) or die(mysql_error());

$sql_addm1 = "insert into tbm1(schoolid, male, female, room) values ('$schoolid', '$m1m', '$m1w', '$rm1')";
mysql_query($sql_addm1) or die(mysql_error());

$sql_addm2 = "insert into tbm2(schoolid, male, female, room) values ('$schoolid', '$m2m', '$m2w', '$rm2')";
mysql_query($sql_addm2) or die(mysql_error());

$sql_addm3 = "insert into tbm3(schoolid, male, female, room) values ('$schoolid', '$m3m', '$m3w', '$rm3')";
mysql_query($sql_addm3) or die(mysql_error());

$sql_addt = "insert into tbt(schoolid, male, female) values ('$schoolid', '$tm', '$tw')";
mysql_query($sql_addt) or die(mysql_error());

$sql_adde = "insert into tbe(schoolid, male, female) values ('$schoolid', '$em', '$ew')";
mysql_query($sql_adde) or die(mysql_error());

$sql_addf = "insert into tbf(schoolid, male, female) values ('$schoolid', '$fm', '$fw')";
mysql_query($sql_addf) or die(mysql_error());

$sql_addc = "insert into tbc(schoolid, male, female) values ('$schoolid', '$cm', '$cw')";
mysql_query($sql_addc) or die(mysql_error());

$sql_addstatus = "insert into tbstatus(schoolid, status) values ('$schoolid', '1')";
mysql_query($sql_addstatus) or die(mysql_error());

$message = "บันทึกข้อมูลเสร็จเรียบร้อย";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<meta http-equiv='refresh' content='0;URL=viewdata.php'>";
//echo $schoolid . "OK";
mysql_close($Conn);
?>