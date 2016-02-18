<?php
include("include/connect.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Real Time Data Managment</title>
<style type="text/css">
<?php include("include/button.css");?>
<!--
.style2 {font-size: 14px}
-->
</style>
</head>

<body>
<center>
  <table width="900"  border="0">
   <tr>
    <td><?php include("header.php"); ?></td>
  </tr>
  	<?php
		if ($_SESSION['ses_username']!=""){	
	?>
  <tr>
    <td>
      <div id='cssmenu'>
<ul>
   <li><a href='index1.php'><span>Home</span></a></li>
   <!--<li class='active has-sub'><a href='#'><span>Products</span></a>
      <ul>
          <li class='has-sub'><a href='#'><span>Product 1</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
          </li>
         <li class='has-sub'><a href='#'><span>Product 2</span></a>
            <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
         </li>
      </ul>
   </li>-->
   <li><a href='index2.php' target = "_blank" ><span>ข้อมูลจำนวนนักเรียน</span></a></li>
   <li class='last'><a href='contact/index.php' target = "_blank"><span>ข้อมูลผู้ประสานงานโรงเรียน</span></a></li>
   <li class='last'><a href='changpass.php' target = "_blank"><span>เปลี่ยนรหัสผ่าน</span></a></li>
   <?php
   if($_SESSION['ses_username']=="56010000"){	
   	echo "<li class='last'><a href='dmc/index.php' target = \"_blank\"><span>ข้อมูลนักเรียนรายบุคคล</span></a></li>";
   }
   ?>
   <li class='last'><a href='logout.php' ><span>ออกจากระบบ</span></a></li>
</ul>
</div>
    </td>
  </tr>
  <?php
	}else{
		$message = "ไม่สามารถทำงานได้ เนื่องจากยังไม่ได้ Login หรือไม่ผ่านการทดสอบสิทธิ์ในการเข้าใช้งาน";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
		} 
mysql_close($Conn); 
	?>
  <tr>
    <td height="59"><br><br><br><br><br><br><br><?php include ("footer.php"); ?></td>
  </tr>
  </table>
</center>
</body>
</html>
