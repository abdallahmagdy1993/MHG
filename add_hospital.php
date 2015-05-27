<?
include "database.php";
connect_db();
$name=$_POST['name'];
$address=$_POST['address'];
$hotline=$_POST['hotline'];
$rating=$_POST['rating'];

$q=mysql_query("SELECT * FROM hospital WHERE Name='$name'");
$rows=mysql_fetch_array($q);
if($name==$rows['Name'])
{
    
    {header('location: adminpanel.php?hoptions=1&error=1');}
}
else if($address==$rows['Address'])
{header('location: adminpanel.php?hoptions=1&error=2');}
else
{
mysql_query("INSERT INTO hospital (Name,Address,Hotline,Rating) VALUES ('$name','$address','$hotline','$rating')");
header('location: adminpanel.php?hoptions=1');
}


?>