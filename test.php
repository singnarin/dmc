<?php
include("include/connect.php");
$sel_school = mysql_query("SELECT * FROM file  ORDER BY `file`.`schoolid` ASC " );
while($schoolResult = mysql_fetch_array($sel_school))
{

echo "[".$schoolResult["schoolid"].".xlsx]แบบฟอร์มโรงเรียน!D9+";
}
?>