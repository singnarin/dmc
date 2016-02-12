<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("include/connect.php");
session_start();

$schoolid = $_POST['txtschoolid'];
$director= $_POST['director'];
$teldirector =$_POST['teldirector'];
$contact = $_POST['contact'];
$telcontact = $_POST['telcontact'];

mysql_query("UPDATE `contact` SET director='".$director."', teldirector='".$teldirector."', contact='".$contact."', telcontact='".$telcontact."' WHERE schoolid = '".$schoolid. "'") or die(mysql_error());
$message = "บันทึกข้อมูลเสร็จเรียบร้อย";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<meta http-equiv='refresh' content='0;URL=viewstatus.php'>";
mysql_close($Conn);
?>