<?
include "database.php";
connect_db();
$address=$_POST['address'];
$price=$_POST['price'];
$s_time=$_POST['s_time'];
$phone_num=$_POST['phone_num'];
$q=mysql_query("SELECT * FROM clinic WHERE Address='$address'");
$rows=mysql_fetch_array($q);
if($address==$rows['Address'])
{header('location: myaccount.php?type=Doctor&C=add&error=1');}
else if(strlen($phone_num)<7)
{
    
    header('location: myaccount.php?type=Doctor&C=add&error=2');
}
else
{
$user=$_COOKIE['username'];
$q=mysql_query("SELECT D_ID FROM doctor WHERE doctor.Name='$user'");
$rows=mysql_fetch_array($q);
$D_ID=$rows['D_ID'];
mysql_query("INSERT INTO clinic (Address,Phone_Num,Price,Start_Time,D_ID) VALUES ('$address','$phone_num','$price','$s_time','$D_ID')");
header('location: myaccount.php?type=Doctor&C=add');
}


?>