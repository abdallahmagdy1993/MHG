<?
include "database.php";
connect_db();
$name=$_POST['delete_spec'];
$hod=$_REQUEST['hod'];
if($address!="-- Select --")
{
    mysql_query("DELETE FROM hospital_specialization WHERE Spec_Name='$name' AND H_ID='$hod'");

}
$header="location: adminpanel.php?soptions=1&hod=$hod";
header($header);

?>