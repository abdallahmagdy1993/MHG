  <html>
<style type="text/css">
.style1 {
	background-image: url('images/Index_30.gif');
	text-align: center;
}
.style2 {
	background-image: url('images/Index_31.gif');
	text-align: center;
}
.style3 {
	font-family: "Times New Roman", Times, serif;
	font-size: large;
}
.style4 {
	text-align: left;
}
.newStyle1 {
	border-style: solid;
	border-width: thin;
}
table.ss{
    width:100%;
    border-collapse:collapse;
    border: 1px solid white;
}
table.ss td , table.ss th{
    border: 1px solid white;
    text-align: center;
}
.style5 {
	text-align: center;
}
</style>
<html><body><?
  include "database.php";
connect_db();
$search=$_REQUEST['search_bar'];
                $q=mysql_query("SELECT * FROM hospital as h WHERE h.Name LIKE '%$search%' OR h.Address LIKE '%$search%'");
              ?>
        <table align="center" class="ss">    
            <thead>
            	<th>Name</th>
            	<th>Address</th>
            	<th>Hotline</th>
            	<th>Rating</th>
            	<th>Specilizations</th>
                </thead>
            	<?while($rows=mysql_fetch_array($q)){?>  
                   <tr> 
                   <td><?echo $rows['Name']; ?>   </td>
                   <td><?echo $rows['Address'] ;?>   </td>
                   <td><?echo $rows['Hotline']; ?>   </td>
                   <td><?echo $rows['Rating']; $id=$rows['H_ID'];?>   </td>
                   <td><form target="_parent" action="search.php?Indicator=hospital&type=spec&hh=<?echo $id;?>" method="post" >
                   <select  name="spec" required=""><option value="">-- Select --</option>
                   <?
                   
                   
                   $q1=mysql_query("SELECT * FROM hospital_specialization as hs WHERE hs.H_ID='$id'");
                   while($rows1=mysql_fetch_array($q1)){?>
                   <option><?  echo $rows1['Spec_Name']; ?></option>
                   
                   
                   <?}?></select>
                     <br><input name="submit" type="submit" value="Go"></form></td>
                   
                   <?}?>
            
            </table>
            
            
            
            
            <div class="style5" style="width:100%">
            
            
            
            
                    </body></html>    