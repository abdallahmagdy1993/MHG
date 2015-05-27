<?
include "database.php";
connect_db();
$newusername=$_POST['username'];
$oldpassword=$_POST['old_password'];
$newpassword=$_POST['new_password'];
$rpassword=$_POST['cnew_password'];
$position=$_POST['position'];
$spec=$_POST['spec'];
$hospital=$_POST['add_hospital'];
$q1=mysql_query("SELECT * FROM  account WHERE username='$newusername'");
    $rows1=mysql_fetch_array($q1);
    
if($newusername!=$_COOKIE['username']&&$newusername==$rows1['username'])
{

     header('location: myaccount.php?type=Doctor&error=1');
    
}
else if($oldpassword!=$_COOKIE['password'])
{
        
        header('location: myaccount.php?type=Doctor&error=2');
}

else if(strlen($newpassword)<6&&strlen($newpassword)>0)
{
    
    header('location: myaccount.php?type=Doctor&error=3');
}
else if($newpassword!=$rpassword&&strlen($newpassword)>0)
{
    
    header('location: myaccount.php?type=Doctor&error=4');
}
    

else
{
if($newpassword=="")
$newpassword=$oldpassword;
$user=$_COOKIE['username'];
$q=mysql_query("SELECT A_ID FROM account,doctor WHERE doctor.Name='$user' AND doctor.ACC_ID=account.A_ID");
$rows=mysql_fetch_array($q);
$A_ID=$rows['A_ID'];

mysql_query("UPDATE  account SET username='$newusername',password='$newpassword' WHERE account.A_ID='$A_ID'");
mysql_query("UPDATE  doctor SET Name='$newusername'  WHERE doctor.ACC_ID='$A_ID'");

if($spec!="-- Select --")
{
mysql_query("UPDATE  doctor SET Spec_Name='$spec'  WHERE doctor.ACC_ID='$A_ID'");
    
}
if($position!="-- Select --")
{
    
    
mysql_query("UPDATE  doctor SET Position='$position'  WHERE doctor.ACC_ID='$A_ID'");
}
if($hospital!="-- Select --")
{
    $q=mysql_query("SELECT H_ID FROM hospital WHERE Name='$hospital'");
    $rows=mysql_fetch_array($q);
    $H_ID=$rows['H_ID'];
    $q=mysql_query("SELECT D_ID FROM doctor WHERE Name='$newusername'");
    $rows=mysql_fetch_array($q);
    $D_ID=$rows['D_ID'];
    mysql_query("INSERT INTO hospital_doctor (D_ID,H_ID) VALUES ('$D_ID','$H_ID')");
    
    
}
   
setcookie("username",$newusername,time()+3600*24);
setcookie("password",$newpassword,time()+3600*24);
     header('location: myaccount.php?type=Doctor');
}


?>