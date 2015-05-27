<?
include "database.php";
connect_db();
$name=$_POST['delete_medicine'];
if($address!="-- Select --")
{
    mysql_query("DELETE FROM pharmacy_medicine WHERE Med_Name='$name' ");

}
header('location: index.php');

?>