<?
include "database.php";
connect_db();
$newusername=$_POST['username'];
$oldpassword=$_POST['old_password'];
$newpassword=$_POST['new_password'];
$rpassword=$_POST['cnew_password'];
$q1=mysql_query("SELECT * FROM  account WHERE username='$newusername'");
    $rows1=mysql_fetch_array($q1);
    
if($newusername!=$_COOKIE['username']&&$newusername==$rows1['username'])
{

     header('location: adminpanel.php?error=1');
    
}
else if($oldpassword!=$_COOKIE['password'])
{
        
        header('location: adminpanel.php?error=2');
}

else if(strlen($newpassword)<6&&strlen($newpassword)>0)
{
    
    header('location: adminpanel.php?error=3');
}
else if($newpassword!=$rpassword&&strlen($newpassword)>0)
{
    
    header('location: adminpanel.php?error=4');
}
    

else
{
if($newpassword=="")
$newpassword=$oldpassword;
$user=$_COOKIE['username'];
$q=mysql_query("SELECT A_ID FROM account WHERE username='$user'");
$rows=mysql_fetch_array($q);
$A_ID=$rows['A_ID'];

mysql_query("UPDATE  account SET username='$newusername',password='$newpassword' WHERE account.A_ID='$A_ID'");
   
setcookie("username",$newusername,time()+3600*24);
setcookie("password",$newpassword,time()+3600*24);
header('location: adminpanel.php');
}


?>