<?
include "database.php";
connect_db();
$name=$_POST['delete_hospital'];
if($address!="-- Select --")
{
    mysql_query("DELETE FROM hospital WHERE Name='$name' ");

}
header('location: adminpanel.php?hoptions=1');

?>