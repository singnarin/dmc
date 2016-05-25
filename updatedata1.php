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

$sql_updateo1 = "UPDATE tbo1 SET male = '".$o1m."', female = '".$o1w."', room = '".$ro1."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updateo1) or die(mysql_error());

$sql_updateo2 = "UPDATE tbo2 SET male = '".$o2m."', female = '".$o2w."', room = '".$ro2."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updateo2) or die(mysql_error());

$sql_updatep1 = "UPDATE tbp1 SET male = '".$p1m."', female = '".$p1w."', room = '".$rp1."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatep1) or die(mysql_error());

$sql_updatep2 = "UPDATE tbp2 SET male = '".$p2m."', female = '".$p2w."', room = '".$rp2."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatep2) or die(mysql_error());

$sql_updatep3 = "UPDATE tbp3 SET male = '".$p3m."', female = '".$p3w."', room = '".$rp3."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatep3) or die(mysql_error());

$sql_updatep4 = "UPDATE tbp4 SET male = '".$p4m."', female = '".$p4w."', room = '".$rp4."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatep4) or die(mysql_error());

$sql_updatep5 = "UPDATE tbp5 SET male = '".$p5m."', female = '".$p5w."', room = '".$rp5."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatep5) or die(mysql_error());

$sql_updatep6 = "UPDATE tbp6 SET male = '".$p6m."', female = '".$p6w."', room = '".$rp6."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatep6) or die(mysql_error());

$sql_updatem1 = "UPDATE tbm1 SET male = '".$m1m."', female = '".$m1w."', room = '".$rm1."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatem1) or die(mysql_error());

$sql_updatem2 = "UPDATE tbm2 SET male = '".$m2m."', female = '".$m2w."', room = '".$rm2."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatem2) or die(mysql_error());

$sql_updatem3 = "UPDATE tbm3 SET male = '".$m3m."', female = '".$m3w."', room = '".$rm3."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatem3) or die(mysql_error());

$sql_updatet = "UPDATE tbt SET male = '".$tm."', female = '".$tw."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatet) or die(mysql_error());

$sql_updatee = "UPDATE tbe SET male = '".$em."', female = '".$ew."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatee) or die(mysql_error());

$sql_updatef = "UPDATE tbf SET male = '".$fm."', female = '".$fw."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatef) or die(mysql_error());

$sql_updatec = "UPDATE tbc SET male = '".$cm."', female = '".$cw."' WHERE schoolid = '".$schoolid. "'";
mysql_query($sql_updatec) or die(mysql_error());

$message = "แก้ไขข้อมูลเสร็จเรียบร้อย";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<meta http-equiv='refresh' content='0;URL=viewdata.php'>";

//echo $schoolid . "OK";
mysql_close($Conn);
?>