<?
include "database.php";
connect_db();
$id=$_COOKIE['c_id'];
$address=$_POST['address'];
$price=$_POST['price'];
$s_time=$_POST['s_time'];
$phone_num=$_POST['phone_num'];
$q=mysql_query("SELECT * FROM clinic WHERE C_ID='$id'");
$rows=mysql_fetch_array($q);
$oldaddress=$rows['Address'];
$q=mysql_query("SELECT * FROM clinic WHERE Address='$address'");
if($address!=$oldaddress&&$address==$rows['Address'])
{
    header('location: myaccount.php?type=Doctor&C=add&error=1');
    }


if(strlen($phone_num)<7)
{
    $header='location: myaccount.php?type=Doctor&C=edit&error=2';
    header($header);
}
else
{setcookie('c_id',$id,time()+3600*24);
mysql_query("UPDATE  clinic SET Address='$address',Phone_Num='$phone_num',Price='$price',Start_Time='$s_time' WHERE C_ID='$id'");
$header='location: myaccount.php?type=Doctor&C=edit';
header($header);
}


?>