<?
include "database.php";
connect_db();
$name=$_POST['name'];
$price=$_POST['price'];
$s_time=$_POST['s_time'];
$e_time=$_POST['e_time'];
$hid=$_REQUEST['hod'];
mysql_query("INSERT INTO hospital_specialization (Spec_Name,Price,Start_Time,End_Time,H_ID) VALUES ('$name','$price','$s_time','$e_time','$hid')");

$header="location: adminpanel.php?soptions=1&hod=$hod";
header($header);


?>