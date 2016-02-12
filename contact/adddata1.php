<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("include/connect.php");
session_start();

$schoolid = $_SESSION['ses_username'];
$director= $_POST['director'];
$teldirector =$_POST['teldirector'];
$contact = $_POST['contact'];
$telcontact = $_POST['telcontact'];

$sql_add = "insert into contact(schoolid, director, teldirector, contact, telcontact, status) values ('$schoolid', '$director', '$teldirector', '$contact', '$telcontact', '1')";
mysql_query($sql_add) or die(mysql_error());

$message = "บันทึกข้อมูลเสร็จเรียบร้อย";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<meta http-equiv='refresh' content='0;URL=viewdata.php'>";
mysql_close($Conn);
?>