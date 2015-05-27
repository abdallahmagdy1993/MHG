<html>
<head>
<title>My Hospital Guide</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background-image: url('images/light_blue_background_for_website.jpg')">
<!-- Save for Web Slices (search.psd) -->
<table id="Table_01" width="769"  border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="2" rowspan="3">
			<img src="images/search_01.gif" width="19" height="56" alt=""></td>
		<td colspan="3" rowspan="2">
		<a href="index.php">
			<img src="images/search_02.gif" width="139" height="32" alt=""></a></td>
		<td rowspan="3">
			<img src="images/search_03.gif" width="13" height="56" alt=""></td>
		<td colspan="5">
		<a href="services.php">
			<img src="images/search_04.gif" width="141" height="31" alt=""></a></td>
		<td rowspan="8">
			<img src="images/search_05.gif" width="13" height="396" alt=""></td>
		<td>
			<a href="index.php?contact=1"><img src="images/Index_06.gif" width="139" height="31" alt=""></a></td>
		<td colspan="3" rowspan="8">
			<img src="images/search_07.gif" width="304" height="396" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="31" alt=""></td>
	</tr>
	<tr>
		<td colspan="5" rowspan="2">
			<img src="images/search_08.gif" width="141" height="25" alt=""></td>
		<td rowspan="7">
			<img src="images/search_09.gif" width="139" height="365" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/search_10.gif" width="139" height="24" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="24" alt=""></td>
	</tr>
	<tr>
		<td rowspan="13">
			<img src="images/search_11.gif" width="12" height="968" alt=""></td>
		<td colspan="9"><a href="index.php">
			<img src="images/search_12.gif" width="279" height="179" alt=""></a></td>
		<td rowspan="5">
			<img src="images/search_13.gif" width="21" height="340" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="179" alt=""></td>
	</tr>
	<tr>
		<td colspan="9">
			<img src="images/search_14.gif" width="279" height="100" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="100" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images/search_15.gif" width="32" height="60" alt=""></td>
		<td colspan="3">
			<img src="images/search_16.gif" width="179" height="51" alt=""></td>
		<td colspan="3" rowspan="3">
			<img src="images/search_17.gif" width="68" height="61" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="51" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/search_18.gif" width="179" height="9" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="9">
			<img src="images/search_19.gif" width="31" height="629" alt=""></td>
		<td colspan="4" rowspan="2">
			<img src="images/search_20.gif" width="180" height="25" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="6">
			<img src="images/search_21.gif" width="51" height="475" alt=""></td>
		<td colspan="5">
			<img src="images/search_22.gif" width="449" height="24" alt=""></td>
		<td colspan="2" rowspan="6">
			<img src="images/search_23.gif" width="45" height="475" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="24" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" class="style1">
				<?
						include"checker.php";
						if(checker($_COOKIE['username'],$_COOKIE['password']))
						{$acc=$_COOKIE['acc_type'];
                        if($acc=='admin')
                        {echo "<center>hello, ".$_COOKIE['username']."<br><a href='adminpanel.php' >Admin Panel</a>"."<br><a href='logout.php'>logout</a>";}
                        else 
						 { echo "<center>hello, ".$_COOKIE['username']."<br><a href='myaccount.php?type=$acc' >My Account</a>"."<br><a href='logout.php'>logout</a>";}
						}else{
						?>
					
            <form  action="login.php" method="post">
				<input name="username" required=""type="text" value="" placeholder="username" ><br>
				<br>
				<input name="password" required="" type="password" placeholder="password"><br>
				<br>
				<input name="login" type="submit" value="Login">&nbsp;&nbsp;&nbsp;
				<a href="register.php?error=0">
				<input name="register" type="button" value="Register"></a></form><?}?>

		</td>
		<td colspan="5" rowspan="5" class="style2" valign="top">
			<br><br>
			<?$rid=$_REQUEST['Indicator'];
            if($_POST['search']==""&&$_REQUEST['type']!="clinic"&&$_REQUEST['type']!="hospital"&&$_REQUEST['type']!="spec"&&$_REQUEST['type']!="pharmacy"){?>
            &nbsp;&nbsp;&nbsp;&nbsp; <span class="style3">Search for a <? echo $rid; ?> </span>
            <form name="searchf" method="post">
            
			
				<div class="style4">
            
                
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input name="search_bar"  required="" type="text" style="width: 404px; height: 27px"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input name="search" type="submit" value="Search"></div>
			</form>
            <?}else if($_REQUEST['Indicator']=="specilization"&&$_REQUEST['type']!="clinic"&&$_REQUEST['type']!="hospital"&&$_REQUEST['type']!="spec"&&$_REQUEST['type']!="pharmacy"){?>
            
            <iframe  src="spec_search.php?search_bar=<?echo $_POST['search_bar']; ?>" width="100%" height="100%" seamless="samless" align="center" frameborder="0"scrolling="auto">iframes are not supported</iframe>
            
            <?}else if($_REQUEST['Indicator']=="doctor"&&$_REQUEST['type']!="clinic"&&$_REQUEST['type']!="hospital"&&$_REQUEST['type']!="spec"&&$_REQUEST['type']!="pharmacy"){
                ?>
            <iframe  src="doctor_search.php?search_bar=<?echo $_POST['search_bar']; ?>" width="100%" height="100%" seamless="samless" align="center" frameborder="0"scrolling="auto">iframes are not supported</iframe>
              
            <?}else if($_REQUEST['Indicator']=="hospital"&&$_REQUEST['type']!="clinic"&&$_REQUEST['type']!="hospital"&&$_REQUEST['type']!="spec"&&$_REQUEST['type']!="pharmacy"){?>
                <iframe  src="hospital_search.php?search_bar=<?echo $_POST['search_bar']; ?>" width="100%" height="100%" seamless="samless" align="center" frameborder="0"scrolling="auto">iframes are not supported</iframe>
            
            <?}else if($_REQUEST['Indicator']=="pharmacy"&&$_REQUEST['type']!="clinic"&&$_REQUEST['type']!="hospital"&&$_REQUEST['type']!="spec"&&$_REQUEST['type']!="pharmacy"){?>
                
                  <iframe  src="pharmacy_search.php?search_bar=<?echo $_POST['search_bar']; ?>" width="100%" height="100%" seamless="samless" align="center" frameborder="0"scrolling="auto">iframes are not supported</iframe>          
            
            
            <?}else if($_REQUEST['Indicator']=="medicine"&&$_REQUEST['type']!="clinic"&&$_REQUEST['type']!="hospital"&&$_REQUEST['type']!="spec"&&$_REQUEST['type']!="pharmacy"){?>
                
                <iframe  src="medicine_search.php?search_bar=<?echo $_POST['search_bar']; ?>" width="100%" height="100%" seamless="samless" align="center" frameborder="0"scrolling="auto">iframes are not supported</iframe>
            
            <?}else if($_REQUEST['type']=="hospital"){
                
                $hos=$_POST['hospital'];
                $q=mysql_query("SELECT * FROM hospital WHERE Name='$hos'");
                $rows=mysql_fetch_array($q);
                ?>
                Hospital Name:&nbsp;&nbsp;<?echo $hos;?>
                &nbsp;&nbsp; <br>
			<br>
			Address:&nbsp;&nbsp;
			<?echo $rows['Address'];?><br>
			<br>
			Hotline:&nbsp; <?echo $rows['Hotline'];?><br>
			<br>
			Rating:&nbsp;
			<?echo $rows['Rating'];?></div>
            
            
            <?}else if($_REQUEST['type']=="clinic"){
                
                $c=$_POST['clinic'];
                $q=mysql_query("SELECT * FROM clinic WHERE Address='$c'");
                $rows=mysql_fetch_array($q);
                ?>
                Clinic Address:&nbsp;&nbsp;<?echo $c;?>
                &nbsp;&nbsp; <br>
			<br>
			Price:&nbsp;&nbsp;
			<?echo $rows['Price'];?><br>
			<br>
			Phone Number:&nbsp; <?echo $rows['Phone_Num'];?><br>
			<br>
			Start Time:&nbsp;
			<?echo $rows['Start_Time'];?></div>
            
            <?}else if($_REQUEST['type']=="spec"){
                
                $c=$_POST['spec'];
                $hh=$_REQUEST['hh'];
                $q=mysql_query("SELECT * FROM hospital_specialization as hs WHERE hs.Spec_Name='$c' AND hs.H_ID='$hh'");
                $rows=mysql_fetch_array($q);
                ?>
                Name:&nbsp;&nbsp;<?echo $c;?>
                &nbsp;&nbsp; <br>
			<br>
			Price:&nbsp;&nbsp;
			<?echo $rows['Price'];?><br>
			<br>
			Start Time:&nbsp; <?echo $rows['Start_Time'];?><br>
			<br>
			End Time:&nbsp;
			<?echo $rows['End_Time'];?>
            <br><br>
            Doctors Names:&nbsp;
            <select  name="doctor" >
                   <?
                    $c=$_POST['spec'];
                   $hh=$_REQUEST['hh'];
                   $q1=mysql_query("SELECT Name FROM doctor as d ,hospital_doctor as hd WHERE d.Spec_Name='$c' AND hd.H_ID='$hh' AND hd.D_ID=d.D_ID");
                   while($rows1=mysql_fetch_array($q1)){?>
                   <option><?  echo $rows1['Name']; ?></option>
                   
                   
                   <?}?></select>
                     </td>
                   
            
            
            </div>
                <?}else if($_REQUEST['type']=="pharmacy"){
                
                $c=$_POST['pharmacy'];
                
                $q=mysql_query("SELECT * FROM pharmacy as p WHERE p.Name='$c'");
                $rows=mysql_fetch_array($q);
                ?>
                Name:&nbsp;&nbsp;<?echo $c;?>
                &nbsp;&nbsp; <br>
			<br>
			Address:&nbsp;&nbsp;
			<?echo $rows['Address'];?><br>
			<br>
			Phone Number:&nbsp; <?echo $rows['Phone_Num'];?><br>
			         </td>
                   
            
            
            </div>
                <?}?>
			
			
			
		</td>
		<td>
			<img src="images/spacer.gif" width="1" height="186" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/search_26.gif" width="180" height="20" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="20" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/search_27.gif" width="1" height="57" alt=""></td>
		<td colspan="3">
			<img src="images/search_28.gif" width="179" height="48" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="48" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/search_29.gif" width="179" height="9" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="2">
			<img src="images/search_30.gif" width="180" height="213" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="188" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/search_31.gif" width="50" height="153" alt=""></td>
		<td colspan="7">
			<img src="images/search_32.gif" width="451" height="25" alt=""></td>
		<td rowspan="2">
			<img src="images/search_33.gif" width="44" height="153" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="25" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/search_34.gif" width="180" height="128" alt=""></td>
		<td colspan="7">
			<img src="images/search_35.gif" width="451" height="128" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="128" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="12" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="7" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="24" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="114" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="52" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="50" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="17" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="21" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="139" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="259" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="44" height="1" alt=""></td>
		<td></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>

