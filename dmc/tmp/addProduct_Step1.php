<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Add Data</title> 
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
   var url = "addProduct_Step2.php"; 
   var area = document.getElementById("show") ; 
   var params =  "name=" + document.getElementById("pname").value  + "&detail=" + document.getElementById("pdetail").value  + "&price=" + document.getElementById("price").value  + "&qty=" + document.getElementById("pqty").value ; 
     
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
        document.getElementById("pname").value = '' ; 
        document.getElementById("pdetail").value = '' ; 
        document.getElementById("price").value = '' ; 
        document.getElementById("pqty").value = '' ; 
     } 
    } 
  }   
  } 
</script> 
</head> 
 
<body onload="createobject('List')"> 
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" target="ifrm"> 
  <table width="1003" border="1" cellspacing="2" cellpadding="5"> 
    <tr> 
      <td>ชื่อสินค้า</td> 
      <td>รายละเอียด</td> 
      <td>ราคา</td> 
      <td>จานวน</td> 
    </tr> 
    <tr> 
      <td> <input type="text" name="pname" id="pname" /> </td> 
      <td> <input type="text" name="pdetail" id="pdetail" /> </td> 
      <td> <input type="text" name="price" id="price" /> </td> 
      <td> <input type="text" name="qty" id="pqty" /> </td> 
      <iframe name='ifrm' style='display:none' ></iframe> 
    </tr> 
    <tr> 
      <td colspan="4"> <input type="button" name="button" id="button" value="เพิ่มข้อมูล" 
onclick="getData()" /> </td> 
    </tr> 
  </table> 
  </form> 
  <div id="show"></div> 
</body> 
</html>