<?
include "checker.php" ;
$username=$_POST['username'];
$password=$_POST['password'];
if(checker($username,$password)){
    $q=mysql_query("SELECT * FROM  account WHERE username='$username'");
$rows=mysql_fetch_array($q);

setcookie("username",$username,time()+24*3600);
setcookie("password",$password,time()+24*3600);
setcookie("acc_type",$rows['Acc_Type'],time()+3600*24);
header('location: index.php');}
else {header('location: index.php');}

?>