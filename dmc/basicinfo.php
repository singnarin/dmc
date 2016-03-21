<?php
include("../include/connect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Real Time Data Managment</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
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
   var url = "basicinfoReport.php"; 
   var area = document.getElementById("show") ; 
   var params =  "txtschool=" + document.getElementById("txtschool").value + "&txtstudentID=" + document.getElementById("txtstudentID").value + "&txtempID=" + document.getElementById("txtempID").value + "&txtclass=" + document.getElementById("txtclass").value + "&txtroom=" + document.getElementById("txtroom").value + "&txtNstudent=" + document.getElementById("txtNstudent").value + "&txtLstudent=" + document.getElementById("txtLstudent").value + "&marriageStatusCode=" + document.getElementById("marriageStatusCode").value + "&nationCode=" + document.getElementById("nationCode").value + "&raceCode=" + document.getElementById("raceCode").value + "&religionCode=" + document.getElementById("religionCode").value + "&bloodCode=" + document.getElementById("bloodCode").value + "&parentFamilyRelation=" + document.getElementById("parentFamilyRelation").value + "&txtCategoryOri=" + document.getElementById("txtCategoryOri").value + "&txttambolOri=" + document.getElementById("txttambolOri").value + "&txtDistrictOri=" + document.getElementById("txtDistrictOri").value + "&txtProvinceOri=" + document.getElementById("txtProvinceOri").value + "&txtbirthYear=" + document.getElementById("txtbirthYear").value + "&txtyearOld=" + document.getElementById("txtyearOld").value ; 
     
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
        document.getElementById("marriageStatusCode").value = '' ;
        document.getElementById("nationCode").value = '' ;
        document.getElementById("raceCode").value = '' ;
        document.getElementById("religionCode").value = '' ;
        document.getElementById("bloodCode").value = '' ;
        document.getElementById("parentFamilyRelation").value = '' ;
        document.getElementById("txttambolOri").value = '' ;
        document.getElementById("txtDistrictOri").value = '' ;
        document.getElementById("txtProvinceOri").value = '' ;
        document.getElementById("txtCategoryOri").value = '' ;
        document.getElementById("txtbirthYear").value = '' ;
        document.getElementById("txtyearOld").value = '' ;
     } 
    } 
  }   
  }

  function ExportData() { 
   window.location =  "weightExport.php?txtschool=" + document.getElementById("txtschool").value + "&txtstudentID=" + document.getElementById("txtstudentID").value + "&txtempID=" + document.getElementById("txtempID").value + "&txtclass=" + document.getElementById("txtclass").value + "&txtroom=" + document.getElementById("txtroom").value + "&txtNstudent=" + document.getElementById("txtNstudent").value + "&txtLstudent=" + document.getElementById("txtLstudent").value + "&marriageStatusCode=" + document.getElementById("marriageStatusCode").value + "&nationCode=" + document.getElementById("nationCode").value + "&raceCode=" + document.getElementById("raceCode").value + "&religionCode=" + document.getElementById("religionCode").value + "&bloodCode=" + document.getElementById("bloodCode").value + "&parentFamilyRelation=" + document.getElementById("parentFamilyRelation").value + "&txtCategoryOri=" + document.getElementById("txtCategoryOri").value + "&txttambolOri=" + document.getElementById("txttambolOri").value + "&txtDistrictOri=" + document.getElementById("txtDistrictOri").value + "&txtProvinceOri=" + document.getElementById("txtProvinceOri").value + "&txtbirthYear=" + document.getElementById("txtbirthYear").value + "&txtyearOld=" + document.getElementById("txtyearOld").value;  
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
<table width="900"  border="0" >
   <tr>
    <td><?php include("header.php"); ?></td>
  </tr>
  <tr>
  	<td><?php include("cssmenu/index.html");?></td>
  </tr>
  <tr>
  	<td><div align="center"><h4>ข้อมูลนักเรียนรายบุคคลจำแนกตามข้อมูลพื้นฐาน</h4></div></td>
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
		<td><div align="right">ปีที่เกิด : </div></td>
		<td><input type="text" name="txtbirthYear" id="txtbirthYear" value=""/></td>
		<td><div align="right">อายุ : </div></td>
		<td><input type="text" name="txtyearOld" id="txtyearOld" value=""/></td>
	</tr>
	<tr>
		<td><div align="right">สถานภาพสมรสบิดามารดา : </div></td>
		<td>
			<select id="marriageStatusCode" name="marriageStatusCode" >
            	<option value="">-- สถานภาพสมรส --</option>
            	<option value="อยู่ด้วยกันจดทะเบียน">อยู่ด้วยกันจดทะเบียนสมรส</option>
            	<option value="โสด">โสด</option>
            	<option value="หม้าย">หม้าย</option>
            	<option value="หย่าร้าง">หย่าร้าง</option>
            	<option value="อยู่ด้วยกันไม่ได้จด">อยู่ด้วยกันไม่ได้จดทะเบียนสมรส</option>
            	<option value="แยกกันอยู่">แยกกันอยู่</option>
            	<option value="บิดาถึงแก่กรรม">บิดาถึงแก่กรรม</option>
            	<option value="มารดาถึงแก่กรรม">มารดาถึงแก่กรรม</option>
            	<option value="บิดาและมารดาถึงแก่กรรม">บิดาและมารดาถึงแก่กรรม</option>
            	<option value="บิดาถึงแก่กรรมมารดาแต่ง">บิดาถึงแก่กรรมมารดาแต่งงานใหม่</option>
            	<option value="มารดาถึงแก่กรรมบิดาแต่ง">มารดาถึงแก่กรรมบิดาแต่งงานใหม่</option>
            </select>
		</td>
		<td><div align="right">เชื้อชาติ : </div></td>
		<td>
			<select id="nationCode" name="nationCode" >
			<option value="">-- เชื้อชาติ --</option>
			<?php
			$nationCoderesult=mysql_query("select * from nationcode") or die (mysql_error());
			while ($row=mysql_fetch_array($nationCoderesult)) {
				echo "<option value='".$row["nation"]."'>".$row["nation"]."</option>";
			}
		?>
			</select>
		</td>
	</tr>
	<tr>
		<td><div align="right">สัญชาติ : </div></td>
		<td>
			 <select id="raceCode" name="raceCode">
            	<option value="">-- สัญชาติ --</option>
            	<option value="ไทย">ไทย</option>
            	<option value="กัมพูชา">กัมพูชา</option>
            	<option value="เกาหลีใต้">เกาหลีใต้</option>
            	<option value="จีน">จีน</option>
            	<option value="ซาอุดีอาระเบีย">ซาอุดีอาระเบีย</option>
            	<option value="ญี่ปุ่น">ญี่ปุ่น</option>
            	<option value="เนปาล">เนปาล</option>
            	<option value="ปากีสถาน">ปากีสถาน</option>
            	<option value="พม่า">พม่า</option>
            	<option value="ฟิลิปปิน">ฟิลิปปิน</option>
            	<option value="มาเลเซีย">มาเลเซีย</option>
            	<option value="ลาว">ลาว</option>
            	<option value="เวียดนาม">เวียดนาม</option>
            	<option value="ศรีลังกา">ศรีลังกา</option>
            	<option value="สิงคโปร์">สิงคโปร์</option>
            	<option value="อินเดีย">อินเดีย</option>
            	<option value="อินโดนีเซีย">อินโดนีเซีย</option>
            	<option value="ไม่ปรากฎสัญชาติ">ไม่ปรากฎสัญชาติ</option>
            	<option value="อื่นๆ">อื่นๆ</option>
            </select>
		</td>
		<td><div align="right">ศาสนา : </div></td>
		<td>
			<select id="religionCode" name="religionCode">
            	<option value="">-- ศาสนา --</option>
            	<option value="พุทธ">พุทธ</option>
            	<option value="อิสลาม">อิสลาม</option>
            	<option value="คริสต์">คริสต์</option>
            	<option value="ซิกส์">ซิกส์</option>
            	<option value="พราหมณ์/ฮินดู">พราหมณ์/ฮินดู</option>
            	<option value="อื่นๆ">อื่นๆ</option>
            </select>
		</td>
	</tr>
	<tr>
		<td><div align="right">หมู่โลหิต : </div></td>
		<td>
			<select id="bloodCode" name="bloodCode" >
            	<option value="">-- กลุ่มเลือด --</option>
            	<option value="N">ไม่ทราบ</option>
            	<option value="A">A</option>
            	<option value="B">B</option>
            	<option value="O">O</option>
            	<option value="AB">AB</option>
            	<option value="ARh+">ARh+</option>
            	<option value="ARh-">ARh-</option>
            	<option value="BRh+">BRh+</option>
            	<option value="BRh-">BRh-</option>
            	<option value="ABRh+">ABRh+</option>
            	<option value="ABRh-">ABRh-</option>
            	<option value="ORh+">ORh+</option>
            	<option value="ORh-">ORh-</option>
            </select>
		</td>
		<td><div align="right">ความเกี่ยวข้องกับผู้ปกครอง : </div></td>
		<td>
			<select id="parentFamilyRelation" name="parentFamilyRelation">
            	<option value="">-- ความเกี่ยวของผู้ปกครองกับนักเรียน --</option>
            	<option value="บิดา">บิดา</option>
            	<option value="มารดา">มารดา</option>
            	<option value="พี่">พี่</option>
            	<option value="น้อง">น้อง</option>
            	<option value="ปู่">ปู่</option>
            	<option value="ย่า">ย่า</option>
            	<option value="ตา">ตา</option>
            	<option value="ยาย">ยาย</option>
            	<option value="ทวด">ทวด</option>
            	<option value="ลุง">ลุง</option>
            	<option value="ป้า">ป้า</option>
            	<option value="น้า">น้า</option>
            	<option value="อา">อา</option>
            	<option value="สามี">สามี</option>
            	<option value="ภรรยา">ภรรยา</option>
            	<option value="ผู้ปกครอง">ผู้ปกครอง</option>
            </select>
		</td>
	</tr>
	<tr>
		<td colspan="4"><div align="center"><h5>ที่อยู่ตามทะเบียนบ้าน</h5></div></td>
	</tr>
	<tr>
		<td><div align="right">หมู่ที่ : </div></td>
		<td><input type="text" name="txtCategoryOri" id="txtCategoryOri" value=""/></td>
		<td><div align="right">ตำบล : </div></td>
		<td><input type="text" name="txttambolOri" id="txttambolOri" value=""/></td>
	</tr>
	<tr>
		<td><div align="right">อำเภอ : </div></td>
		<td><input type="text" name="txtDistrictOri" id="txtDistrictOri" value=""/></td>
		<td><div align="right">จังหวัด : </div></td>
		<td><input type="text" name="txtProvinceOri" id="txtProvinceOri" value=""/></td>
	</tr>
	<tr>
		<td colspan="4"><div align="center">
		<input class="btn btn-primary" type="button" name="button" id="button" value="ค้นหาข้อมูล" onclick="getData()" />
		<input class="btn btn-primary" type="button" name="button" id="button" value="นำออกข้อมูล" onclick="ExportData()" />
		</div></td>
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
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>