<?
include "database.php";
connect_db();
$name=$_POST['name'];
$address=$_POST['address'];
$hotline=$_POST['hotline'];
$rating=$_POST['rating'];
$hid=$_REQUEST['hod'];

$q=mysql_query("SELECT * FROM hospital WHERE H_ID='$hid'");
$rows=mysql_fetch_array($q);
$oldname=$rows['Name'];
$oldaddress=$rows['Address'];

$q1=mysql_query("SELECT * FROM hospital WHERE Name='$name'");
$rows1=mysql_fetch_array($q1);

if($name!=$oldname&&$name==$rows1['Name'])
{
    
    {header('location: adminpanel.php?hoptions=2&error=1');}
}
else if($address!=$oldaddress&&$address==$rows1['Address'])
{header('location: adminpanel.php?hoptions=2&error=2');}
else
{
mysql_query("UPDATE hospital SET Name='$name',Address='$address',Hotline='$hotline',Rating='$rating' WHERE H_ID='$hid'");
$header="location: adminpanel.php?hoptions=2&hod=$hid";
header($header);
}

?>