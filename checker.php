<?
include "database.php";
connect_db();
function checker($username,$password){
if($username!=""&&$password!=""){
$q=mysql_query("SELECT * FROM  account WHERE username='$username'");
$rows=mysql_fetch_array($q);
$real_username=$rows['username'];
$real_password=$rows['password'];           
if($real_username==$username&&$real_password==$password){
return true;}
else
{return false;}
}}
?>