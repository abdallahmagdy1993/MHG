<?
include "database.php";
connect_db();
$newusername=$_POST['new_username'];
$newpassword=$_POST['new_password'];
$rpassword=$_POST['cnew_password'];
$acc=$_POST['acc_type'];
$q1=mysql_query("SELECT * FROM  account WHERE username='$newusername'");
$rows1=mysql_fetch_array($q1);
if($newusername==$rows1['username'])
   {
   header('location: register.php?error=1');
   }
   
else if(strlen($newpassword)<6)
{
   header('location: register.php?error=2');
   }
   
else if($newpassword!=$rpassword)
{
   header('location: register.php?error=3');
   }
   
else
{mysql_query("INSERT INTO  account (username,password,Acc_Type) VALUES ('$newusername','$newpassword','$acc')");
if($acc=="Patient")
{
   
    
    $q2=mysql_query("SELECT * FROM  account WHERE username='$newusername'");
    $rows2=mysql_fetch_array($q2);
    $ACC_ID=$rows2['A_ID'];
    mysql_query("INSERT INTO  patient (Name,ACC_ID) VALUES ('$newusername','$ACC_ID')");
}
else if($acc=="Doctor")
{
   
    $q2=mysql_query("SELECT * FROM  account WHERE username='$newusername'");
    $rows2=mysql_fetch_array($q2);
    $ACC_ID=$rows2['A_ID'];
    mysql_query("INSERT INTO  doctor (Name,ACC_ID) VALUES ('$newusername','$ACC_ID')");
}
else if($acc=="Pharmacy")
{
   
    $q2=mysql_query("SELECT * FROM  account WHERE username='$newusername'");
    $rows2=mysql_fetch_array($q2);
    $ACC_ID=$rows2['A_ID'];
    mysql_query("INSERT INTO  pharmacy (Name,ACC_ID) VALUES ('$newusername','$ACC_ID')");
}

setcookie("username",$newusername,time()+3600*24);
setcookie("password",$newpassword,time()+3600*24);
setcookie("acc_type",$acc,time()+3600*24);
header('location: index.php');}


?>