<?
include "database.php";
connect_db();

$aid=$_POST['del'];
    mysql_query("DELETE FROM account WHERE A_ID='$aid' ");


header('location: adminpanel.php');

?>