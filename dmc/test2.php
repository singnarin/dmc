<?php

//database connection details
$connect = mysql_connect('localhost','root','tootuu7413');

if (!$connect) {
 die('Could not connect to MySQL: ' . mysql_error());
}

//your database name
$cid =mysql_select_db('test',$connect);

// path where your CSV file is located
define('CSV_PATH','D:');

// Name of your CSV file
$csv_file = CSV_PATH . "test.csv"; 


if (($handle = fopen($csv_file, "r")) !== FALSE) {
   fgetcsv($handle);   
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
          $col[$c] = $data[$c];
        }

 $col1 = $col[0];
 $col2 = $col[1];
 $col3 = $col[2];
   
// SQL Query to insert data into DataBase
$query = "INSERT INTO csvtbl(ID,name,city) VALUES('".$col1."','".$col2."','".$col3."')";
$s     = mysql_query($query, $connect );
 }
    fclose($handle);
}

echo "File data successfully imported to database!!";
mysql_close($connect);
?>