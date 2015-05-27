<?
include "database.php";
connect_db();
$address=$_POST['delete_clinic'];
if($address!="-- Select --")
{
    mysql_query("DELETE FROM clinic WHERE Address='$address' ");

}
header('location: myaccount.php?type=Doctor&C=add');

?>