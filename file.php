<?php
$data=json_decode(file_get_contents("php://input"));
$name=$data->name;
$class=$data->classs;
$dbuser="akshay";
$dbpass="abcd";
$database="form";
$host="localhost";
mysql_connect(localhost,$dbuser,$dbpass);
mysql_select_db($database);
$sql="insert into jason values('$name','$class')";
mysql_query($sql);
echo "hey";
?>

