<?
include "database.php";
connect_db();
$address=$_POST['edit_clinic1'];


if($address!="-- Select --")
{$q=mysql_query("SELECT C_ID FROM clinic WHERE Address='$address'");
$rows=mysql_fetch_array($q);
$id=$rows['C_ID'];
    setcookie('c_id',$id,time()+3600*24);
    $header='location: myaccount.php?type=Doctor&C=edit';
header($header);
    

}
else header('location: myaccount.php?type=Doctor&C=add');
    
?>