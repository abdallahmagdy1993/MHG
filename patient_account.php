<?
include "database.php";
connect_db();
$newusername=$_POST['username'];
$oldpassword=$_POST['old_password'];
$newpassword=$_POST['new_password'];
$rpassword=$_POST['cnew_password'];
$disease=$_POST['disease'];
$history=$_POST['history'];
$doctor=$_POST['add_doctor'];
$hospital=$_POST['add_hospital'];
$q1=mysql_query("SELECT * FROM  account WHERE username='$newusername'");
    $rows1=mysql_fetch_array($q1);
    
if($newusername!=$_COOKIE['username']&&$newusername==$rows1['username'])
{

     header('location: myaccount.php?type=Patient&error=1');
    
}
else if($oldpassword!=$_COOKIE['password'])
{
        
        header('location: myaccount.php?type=Patient&error=2');
}

else if(strlen($newpassword)<6&&strlen($newpassword)>0)
{
    
    header('location: myaccount.php?type=Patient&error=3');
}
else if($newpassword!=$rpassword&&strlen($newpassword)>0)
{
    
    header('location: myaccount.php?type=Patient&error=4');
}
    

else
{
if($newpassword=="")
$newpassword=$oldpassword;
$user=$_COOKIE['username'];
$q=mysql_query("SELECT A_ID FROM account,patient WHERE patient.Name='$user' AND patient.ACC_ID=account.A_ID");
$rows=mysql_fetch_array($q);
$A_ID=$rows['A_ID'];

mysql_query("UPDATE  account SET username='$newusername',password='$newpassword' WHERE account.A_ID='$A_ID'");
mysql_query("UPDATE  patient SET Name='$newusername',Disease='$disease',History='$history'  WHERE patient.ACC_ID='$A_ID'");

if($doctor!="-- Select --")
{
    $q=mysql_query("SELECT D_ID FROM doctor WHERE Name='$doctor'");
    $rows=mysql_fetch_array($q);
    $D_ID=$rows['D_ID'];
    $q=mysql_query("SELECT P_ID FROM patient WHERE Name='$newusername'");
    $rows=mysql_fetch_array($q);
    $P_ID=$rows['P_ID'];
    mysql_query("INSERT INTO doctor_patient (P_ID,D_ID) VALUES ('$P_ID','$D_ID')");
    
}
if($hospital!="-- Select --")
{
    $q=mysql_query("SELECT H_ID FROM hospital WHERE Name='$hospital'");
    $rows=mysql_fetch_array($q);
    $H_ID=$rows['H_ID'];
    $q=mysql_query("SELECT P_ID FROM patient WHERE Name='$newusername'");
    $rows=mysql_fetch_array($q);
    $P_ID=$rows['P_ID'];
    mysql_query("INSERT INTO hospital_patient (P_ID,H_ID) VALUES ('$P_ID','$H_ID')");
    
    
}
   
setcookie("username",$newusername,time()+3600*24);
setcookie("password",$newpassword,time()+3600*24);
     header('location: myaccount.php?type=Patient');
}


?>