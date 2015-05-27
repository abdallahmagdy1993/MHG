<?
include "database.php";
connect_db();
$newusername=$_POST['username'];
$oldpassword=$_POST['old_password'];
$newpassword=$_POST['new_password'];
$rpassword=$_POST['cnew_password'];
$phone_num=$_POST['phone_num'];
$address=$_POST['address'];
$medicine=$_POST['add_medicine'];
$m_price=$_POST['medicine_price'];
$medicine=strtolower($medicine);
$q1=mysql_query("SELECT * FROM  account WHERE username='$newusername'");
    $rows1=mysql_fetch_array($q1);
    
if($newusername!=$_COOKIE['username']&&$newusername==$rows1['username'])
{

     header('location: myaccount.php?type=Pharmacy&error=1');
    
}
else if($oldpassword!=$_COOKIE['password'])
{
        
        header('location: myaccount.php?type=Pharmacy&error=2');
}

else if(strlen($newpassword)<6&&strlen($newpassword)>0)
{
    
    header('location: myaccount.php?type=Pharmacy&error=3');
}
else if($newpassword!=$rpassword&&strlen($newpassword)>0)
{
    
    header('location: myaccount.php?type=Pharmacy&error=4');
}
    
else if(strlen($phone_num)<7)
{header('location: myaccount.php?type=Pharmacy&error=5');}
else
{
if($newpassword=="")
$newpassword=$oldpassword;
$user=$_COOKIE['username'];
$q=mysql_query("SELECT A_ID FROM account,pharmacy WHERE pharmacy.Name='$user' AND pharmacy.ACC_ID=account.A_ID");
$rows=mysql_fetch_array($q);
$A_ID=$rows['A_ID'];

mysql_query("UPDATE  account SET username='$newusername',password='$newpassword' WHERE account.A_ID='$A_ID'");
mysql_query("UPDATE  pharmacy SET Name='$newusername',Address='$address',Phone_Num='$phone_num'  WHERE pharmacy.ACC_ID='$A_ID'");


$q=mysql_query("SELECT * FROM medicine WHERE Name='$medicine'");
$rows=mysql_fetch_array($q);
if($medicine!=$rows['Name'])
{
mysql_query("INSERT INTO medicine (Name,Price) VALUES ('$medicine','$m_price')");
}
$q=mysql_query("SELECT PH_ID FROM pharmacy WHERE Name='$newusername'");
$rows=mysql_fetch_array($q);
$PH_ID=$rows['PH_ID'];
mysql_query("INSERT INTO pharmacy_medicine (Med_Name,PH_ID) VALUES ('$medicine','$PH_ID')");


setcookie("username",$newusername,time()+3600*24);
setcookie("password",$newpassword,time()+3600*24);
header('location: myaccount.php?type=Pharmacy');
}


?>