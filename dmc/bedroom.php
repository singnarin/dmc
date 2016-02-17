<?php
include("../include/connect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Real Time Data Managment</title>
<script language="javascript"> 
  var obj = new createobject(); 
   
  function createobject(Mode) { 
  var XMLHttp = false ; 
  if (window.XMLHttpRequest) { 
    XMLHttp = new XMLHttpRequest() ; 
  } else if (window.ActiveXobject) { 
    XMLHttp = new ActiveXobject("Microsoft.XMLHTTP") ;   
  } else { 
    alert ("Browser ไม่สามารถรองรับการท างาน Ajax ได้") ;    
  } 
  return XMLHttp ; 
  } 
   
  function getData() { 
  if(obj) { 
   var url = "bedroomReport.php"; 
   var area = document.getElementById("show") ; 
   var params =  "txtschool=" + document.getElementById("txtschool").value + "&txtstudentID=" + document.getElementById("txtstudentID").value + "&txtempID=" + document.getElementById("txtempID").value + "&txtclass=" + document.getElementById("txtclass").value + "&txtroom=" + document.getElementById("txtroom").value + "&txtNstudent=" + document.getElementById("txtNstudent").value + "&txtLstudent=" + document.getElementById("txtLstudent").value + "&txtbedroom=" + document.getElementById("txtbedroom").value ; 
     
    obj.open("POST", url, true) ; 
    obj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");  
    obj.setRequestHeader("Content-length", params.length); 
    obj.setRequestHeader("Connection","close");  
    obj.send(params) ;  
 
    obj.onreadystatechange = function() { 
    if (obj.readyState == 3 ){ 
      area.innerHTML = "กาลังโหลดข้อมูล..." ;   
    } 
      if (obj.readyState == 4 ) { 
        area.innerHTML = obj.responseText ; 
        document.getElementById("txtschool").value = '' ; 
        document.getElementById("txtstudentID").value = '' ;
        document.getElementById("txtempID").value = '' ;
        document.getElementById("txtclass").value = '' ;
        document.getElementById("txtroom").value = '' ;
        document.getElementById("txtNstudent").value = '' ;
        document.getElementById("txtLstudent").value = '' ;
        document.getElementById("txtbedroom").value = '' ;
     } 
    } 
  }   
  } 
</script>
<style type="text/css">
<?php 
include("include/button.css");
include("css/stylesheet.css");
?>
<!--
.style2 {font-size: 14px}
-->
</style>
</head>
<body onload="createobject('List')"> 
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" target="ifrm"> 
<!--<form action="weightReport.php" method="post" enctype="multipart/form-data" name="form1" id="form1" target="ifrm">-->
<div align="center">
<?php
		if ($_SESSION['ses_username']!=""){	
?> 
<table width="900"  border="0">
   <tr>
    <td><?php include("header.php"); ?></td>
  </tr>
  <tr>
  	<td><?php include("cssmenu/index.html");?><br><br></td>
  </tr>
  <tr>
  	<td><div align="center"><h4>ข้อมูลนักเรียนรายบุคคลจำแนกตามประเภทที่พักนอน</h4></div></td>
  </tr>
<table border="0">

	<tr>
		<td><div align="right">โรงเรียน : </div></td>
		<td><input type="text" name="txtschool" id="txtschool" value=""/></td>
		<td><div align="right">เลขประจำตัวนักเรียน : </div></td>
		<td><input type="text" name="txtstudentID" id="txtstudentID" value=""/></td>
	</tr>
  	<tr>
		<td><div align="right">เลขประจำตัวประชาชน : </div></td>
		<td><input type="text" name="txtempID" id="txtempID" value=""/></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><div align="right">ชั้น : </div></td>
		<td>
		<select name="txtclass" id = "txtclass">
			<option value="">------เลือกชั้น---------</option>
			<option value="อ.3 ขวบ">อ.3 ขวบ</option>
			<option value="อ.1">อ.1</option>
			<option value="อ.2">อ.2</option>
			<option value="ป.1">ป.1</option>
			<option value="ป.2">ป.2</option>
			<option value="ป.3">ป.3</option>
			<option value="ป.4">ป.4</option>
			<option value="ป.5">ป.5</option>
			<option value="ป.6">ป.6</option>
			<option value="ม.1">ม.1</option>
			<option value="ม.2">ม.2</option>
			<option value="ม.3">ม.3</option>
		</select>
		</td>
		<td><div align="right">ห้อง : </div></td>
		<td><input type="text" name="txtroom" id="txtroom" value=""/></td>
	</tr>
	<tr>
		<td><div align="right">ชื่อ : </div></td>
		<td><input type="text" name="txtNstudent" id="txtNstudent" value=""/></td>
		<td><div align="right">นามสกุล : </div></td>
		<td><input type="text" name="txtLstudent" id="txtLstudent" value=""/></td>
	</tr>
	<tr>
		<td ><div align="right"><br>ที่พักนอน</div></td>
		<td ><br>
		<select name="txtbedroom" id="txtbedroom">
			<option value=""></option>
			<option value="อาศัยอยู่กับบิดามารดา">อาศัยอยู่กับบิดามารดา</option>
        	<option value="อาศัยอยู่กับญาติ">อาศัยอยู่กับญาติ</option>
        	<option value="อาศัยอยู่กับครู">อาศัยอยู่กับครู</option>
        	<option value="อาศัยอยู่กับพระ">อาศัยอยู่กับพระ</option>
        	<option value="องค์กรการกุศล">องค์กรการกุศล</option>
        	<option value="(โครงการพักนอนประจำ)บ้านพักครู">(โครงการพักนอนประจำ)บ้านพักครู</option>
        	<option value="(โครงการพักนอนประจำ)บ้านพักนักเรียน/หอนอน">(โครงการพักนอนประจำ)บ้านพักนักเรียน/หอนอน</option>
        	<option value="(โครงการพักนอนประจำ)พักรวมกับชุมชน/อื่นๆ">(โครงการพักนอนประจำ)พักรวมกับชุมชน/อื่นๆ</option>
        </select>
		</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="4"><br><div align="center"><input type="button" name="button" id="button" value="ค้นหาข้อมูล" onclick="getData()" />
		<!--<iframe id="iframe_target" name="ifrm" src="#" height="100%" width="900" scrolling="no" frameborder="no"></iframe>
		--></div></td>
		<iframe name='ifrm' style='display:none' ></iframe> 
	</tr>
</table>
</table>
<div id="show"></div>
<?php
}else{
		$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
		} 
mysql_close($Conn); 
?>
</div>
</form>
</body>
</html>