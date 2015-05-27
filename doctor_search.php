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
                $q=mysql_query("SELECT * FROM doctor as d WHERE d.Name LIKE '%$search%' OR d.Spec_Name LIKE '%$search%' OR d.Position LIKE '%$search%'");
              ?>
        <table align="center" class="ss">    
            <thead>
            	<th>Doctor</th>
            	<th>Specilization</th>
            	<th>Position</th>
            	<th>Hospital</th>
            	<th>Clinic</th>
                </thead>
            	<?while($rows=mysql_fetch_array($q)){?>  
                   <tr> 
                   <td><?echo $rows['Name'] ?>   </td>
                   <td><?echo $rows['Spec_Name'] ?>   </td>
                   <td><?echo $rows['Position'] ?>   </td>
                   <td><form   target="_parent" action="search.php?Indicator=doctor&type=hospital" method="post" >
                   <select  name="hospital" required=""><option value="">-- Select --</option>
                   <?$id=$rows['D_ID'];
                   $q1=mysql_query("SELECT * FROM hospital as h,hospital_doctor as hd WHERE hd.D_ID='$id' AND h.H_ID=hd.H_ID");
                   while($rows1=mysql_fetch_array($q1)){?>
                   <option><?  echo $rows1['Name']; ?></option>
                   
                   
                   <?}?></select>
                     <br><input name="submit" type="submit" value="Go"></form></td>
                   
                   <td><form  target="_parent" action="search.php?Indicator=doctor&type=clinic" method="post" >
                   <select  name="clinic" required=""><option value="">-- Select --</option>
                   <?$id=$rows['D_ID'];
                   $q1=mysql_query("SELECT * FROM clinic as c WHERE c.D_ID='$id'");
                   while($rows1=mysql_fetch_array($q1)){?>
                   <option><?  echo $rows1['Address']; ?></option>
                   
                   
                   <?}?></select>
                     <br><input name="submit" type="submit" value="Go"></form> </td> 
                      </tr>
                   <?}?>
            
            </table>
            
            
            
            
            <div class="style5" style="width:100%">
            
            
            
        </body></html>    