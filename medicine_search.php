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
              
                $q=mysql_query("SELECT * FROM medicine as m WHERE m.Name LIKE '%$search%' ");
              ?>
        <table align="center" class="ss">    
            <thead>
            	<th>Name</th>
            	<th>Price</th>
            	<th>Pharmacy</th>
            	</thead>
            	<?while($rows=mysql_fetch_array($q)){?>  
                   <tr> 
                   <td><?echo $rows['Name']; ?>   </td>
                   <td><?echo $rows['Price'] ;?>   </td>
                   <td><form   target="_parent"action="search.php?Indicator=medicine&type=pharmacy" method="post" >
                   <select  name="pharmacy" required=""><option value="">-- Select --</option>
                   <?
                   
                   $name=$rows['Name'];
                   $q1=mysql_query("SELECT * FROM pharmacy as p, pharmacy_medicine as pm WHERE pm.Med_Name='$name' AND pm.PH_ID=p.PH_ID");
                   while($rows1=mysql_fetch_array($q1)){?>
                   <option><?  echo $rows1['Name']; ?></option>
                   
                   
                   <?}?></select>
                     <br><input name="submit" type="submit" value="Go"></form></td>
                   
                   <?}?>
            
            </table>
            
            
            
            
            <div class="style5" style="width:100%">
            
            
            
            
        </body></html>    