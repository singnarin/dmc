<? 
  header('Content-Type: text/html; charset=utf-8'); 
  $n = $_POST["name"]; 
  $d = $_POST["detail"]; 
  $p = $_POST["price"]; 
  $q = $_POST["qty"]; 
  addData($n, $d, $p, $q);   
 
  function connectDB($host, $user, $pass, $db_name) { 
    $conn = mysqli_connect($host, $user, $pass); 
    if (!$conn) return false; 
    $result = mysqli_select_db($conn, $db_name); 
    if (!$result) return false; 
    return $conn; 
  } 
   
  function sendResponse($status, $message) { 
    echo $status . "|" . $message; 
  } 
 
  function addData($name, $detail, $price, $qty) { 
    $conn = connectDB("localhost", "root", "root", "dbData"); 
    if (!$conn) { 
     sendResponse("error", "เกิดปัญหาในการติดต่อฐานข้อมูล"); 
      return; 
    } 
  
   $sql = "insert into products (id, name,  detail, price, qty) values ('', '$name','$detail', $price, 
$qty)"; 
 
    mysqli_query($conn, $sql) 
        or die (sendResponse("error", "บันทึกข้อมูลไม่ได้" ) . $sql);   
   sendResponse("success", "บันทึกข้อมูลเรียบร้อยแล้ว");   
 
  $sqlStr = "select * from products order by  id asc"; 
  $qry = mysqli_query($conn, $sqlStr) 
      or die (sendResponse("error", "ไม่พบข้อมูล" ));  
?> 
<table width="600" border="1" cellspacing="2" cellpadding="5"> 
  <tr> 
    <td>รหัสสินค้า</td> 
    <td>ชื่อสินค้า</td> 
    <td>รายละเอียด</td> 
    <td>ราคา</td> 
    <td>จ านวน</td> 
  </tr> 
 <? 
   while($rs = mysqli_fetch_array($qry)) { 
 ?> 
  <tr> 
    <td><?=$rs["id"];?></td> 
    <td><?=$rs["name"];?></td> 
    <td><?=$rs["detail"];?></td> 
    <td><?=$rs["price"];?></td> 
    <td><?=$rs["qty"];?></td> 
  </tr> 
  <? 
   } 
    mysqli_close($conn);  
  } 
  ?> 
</table>