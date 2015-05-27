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
        
                $q=mysql_query("SELECT * FROM pharmacy as p WHERE p.Name LIKE '%$search%' OR p.Address LIKE '%$search%'");
              ?>
        <table align="center" class="ss">    
            <thead>
            	<th>Name</th>
            	<th>Address</th>
            	<th>Phone Number</th>
            	</thead>
            	<?while($rows=mysql_fetch_array($q)){?>  
                   <tr> 
                   <td><?echo $rows['Name']; ?>   </td>
                   <td><?echo $rows['Address'] ;?>   </td>
                   <td><?echo $rows['Phone_Num']; ?>   </td>
                   
                   
                   <?}?>
            
            </table>
            
            
            
            
            <div class="style5" style="width:100%">
            
            
            
            
                
            
        </body></html>    