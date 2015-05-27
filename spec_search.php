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
                       
                $q=mysql_query("SELECT * FROM hospital as h,hospital_specialization as hs WHERE hs.Spec_Name LIKE '%$search%' AND h.H_ID=hs.H_ID");
                ?>
        <table align="center" class="ss">    
            <thead>
            	<th>Specilization</th>
            	<th>Hospital</th>
            	<th>Price</th>
            	<th>Start Time</th>
            	<th>End Time</th>
                </thead>
            	<?while($rows=mysql_fetch_array($q)){?>  
                   <tr><td><?echo $rows['Spec_Name'] ?>   </td> 
                   <td><?echo $rows['Name'] ?>   </td>
                   <td><?echo $rows['Price'] ?>   </td>
                   <td><?echo $rows['Start_Time'] ?>   </td>
                   <td><?echo $rows['End_Time'] ?>   </td> 
                      </tr>
                   <?}?>
            
            </table>
        
 
            
            
        </body></html>    