<?
function connect_db(){
$con=mysql_connect("localhost","root","123456");
mysql_select_db("mhg",$con);
}
?>