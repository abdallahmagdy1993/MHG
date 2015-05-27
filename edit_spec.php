<?
include "database.php";
connect_db();

$hid=$_REQUEST['hod'];
$spec=$_REQUEST['spec'];

$price=$_POST['price'];
$s_time=$_POST['s_time'];
$e_time=$_POST['e_time'];

mysql_query("UPDATE hospital_specialization SET Price='$price',Start_Time='$s_time',End_Time='$e_time' WHERE H_ID='$hid' AND Spec_Name='$spec'");
$header="location: adminpanel.php?soptions=2&hod=$hid&spec=$spec";
header($header);


?>