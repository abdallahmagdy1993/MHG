<html>
<head>
<title>My Hospital Guide</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.style1 {
	text-align: center;
	background-image: url('images/Index_30.gif');
}
.style2 {
	background-image: url('images/Index_31.gif');
	text-align: center;
}
.style3 {
	text-align: center;
}
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background-image: url('images/light_blue_background_for_website.jpg')">
<div class="style3">
<!-- Save for Web Slices (Register.psd) -->
<table id="Table_01" width="769"  border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="2" rowspan="3" class="style3">
			<img src="images/Register_01.gif" width="19" height="56" alt=""></td>
		<td colspan="4" rowspan="2" class="style3">
		<a href="index.php">
			<img src="images/Register_02.gif" width="139" height="32" alt=""></a></td>
		<td rowspan="3" class="style3">
			<img src="images/Register_03.gif" width="13" height="56" alt=""></td>
		<td colspan="6" class="style3">
		<a href="services.php">
			<img src="images/Register_04.gif" width="141" height="31" alt=""></a></td>
		<td rowspan="9" class="style3">
			<img src="images/Register_05.gif" width="13" height="397" alt=""></td>
		<td class="style3">
			<a href="index.php?contact=1"><img src="images/Index_06.gif" width="139" height="31" alt=""></a></td>
		<td colspan="3" rowspan="9" class="style3">
			<img src="images/Register_077.gif" width="304" height="397" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="31" alt=""></td>
	</tr>
	<tr>
		<td colspan="6" rowspan="2" class="style3">
			<img src="images/Register_08.gif" width="141" height="25" alt=""></td>
		<td rowspan="8" class="style3">
			<img src="images/Register_099.gif" width="139" height="366" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" class="style3">
			<img src="images/Register_10.gif" width="139" height="24" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="24" alt=""></td>
	</tr>
	<tr>
		<td rowspan="14" class="style3">
			<img src="images/Register_11.gif" width="12" height="968" alt=""></td>
		<td colspan="11" class="style3"><a href="index.php">
			<img src="images/Register_12.gif" width="279" height="179" alt=""></a></td>
		<td rowspan="6" class="style3">
			<img src="images/Register_13.gif" width="21" height="341" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="179" alt=""></td>
	</tr>
	<tr>
		<td colspan="11" class="style3">
			<img src="images/Register_14.gif" width="279" height="100" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="100" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2" class="style3">
			<img src="images/Register_15.gif" width="32" height="60" alt=""></td>
		<td colspan="4" class="style3">
			<img src="images/Register_16.gif" width="179" height="51" alt=""></td>
		<td colspan="4" rowspan="3" class="style3">
			<img src="images/Register_17.gif" width="68" height="61" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="51" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" class="style3">
			<img src="images/Register_18.gif" width="179" height="9" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="10" class="style3">
			<img src="images/Register_19.gif" width="31" height="629" alt=""></td>
		<td colspan="2" rowspan="4" class="style3">
			<img src="images/Register_20.gif" width="2" height="209" alt=""></td>
		<td colspan="3" rowspan="3" class="style3">
			<img src="images/Register_21.gif" width="178" height="25" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" class="style3">
			<img src="images/Register_22.gif" width="55" height="1" alt=""></td>
		<td class="style3">
			<img src="images/Register_23.gif" width="1" height="1" alt=""></td>
		<td class="style3">
			<img src="images/Register_24.gif" width="12" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td rowspan="8" class="style3">
			<img src="images/Register_25.gif" width="50" height="627" alt=""></td>
		<td colspan="7" class="style3">
			<img src="images/Register_26.gif" width="450" height="23" alt=""></td>
		<td colspan="2" rowspan="6" class="style3">
			<img src="images/Register_27.gif" width="45" height="474" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="23" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" class="style1">
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
				<input name="username" required="" type="text" value="" placeholder="username" ><br>
				<br>
				<input name="password"  required=""type="password" placeholder="password"><br>
				<br>
				<input name="login" type="submit" value="Login">&nbsp;&nbsp;&nbsp;
				<a href="register.php">
				<input name="register" type="button" value="Register"></a></form><?}?>

		</td>
		<td colspan="7" rowspan="5" class="style2" valign="top">
			<?if($_REQUEST['hoptions']!='1'&&$_REQUEST['hoptions']!='2'&&$_REQUEST['soptions']!='1'&&$_REQUEST['soptions']!='2'){?>
			<form action="admin_options.php" method="post">
				<br>
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="username" type="text" value="<?echo $_COOKIE['username']?>" required="" placeholder=""<?echo $_COOKIE['username']?>""  style="width 172px"><br>
                <?if($_REQUEST['error']=="1"){?>invalid username,try another one<?}?>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Old Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				<input name="old_password" type="password" placeholder="type your password..." required=""  style="width: 170px"><br>
                <?if($_REQUEST['error']=="2"){?>invalid password,try another one<?}?>
				<br>
				
				New Password:(optional)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				<input name="new_password" type="password" placeholder="type your new password..."  style="width: 170px"><br>
                <?if($_REQUEST['error']=="3"){?>password must be longer than 5 digits<?}?>                
				<br>
				Confirm New Password:(optional) 				<input name="cnew_password" type="password" placeholder="confirm your new password..." style="width: 170px"><br>
                <?if($_REQUEST['error']=="4"){?>Confirmation password doesn't match password<?}?>
				<br>
				
				<br>

				<input name="submit" type="submit" value="update"><br>
				
			</form>
            <a href="adminpanel.php?hoptions=1"><input name="hospital_options" type="button" value="Hospital Options"></a><br><br>
                <form name="del_account" action="del_account.php" method="post">
				Accounts:&nbsp; <select name="del" required="">
				<option value="">-- Select --</option>
                <?$q=mysql_query("SELECT * FROM account");
                while($rows=mysql_fetch_array($q))
                {
                    if($rows['Acc_Type']!='admin'){?>
                
                <option value="<?echo $rows['A_ID'];?>"><?echo $rows['username'].'('.$rows['Acc_Type'].')'; ?></option>
                
                
                <?}}?>
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="submit" type="submit" value="Delete">
				</form>
				
				
				
			<?}else if($_REQUEST['hoptions']=='1'){?>
            <form action="add_hospital.php" method="post">
				<br>
								Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				<input name="name" type="text"  required="" placeholder="type the hospital name..."  style="width 172px"><br>
                <?if($_REQUEST['error']=="1"){?>Invalid Name,Try another one<?}?><br>
				Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input name="address"  placeholder="type the hospital address..."type="text"><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				
                <?if($_REQUEST['error']=="2"){?>Invalid Address,Try another one<?}?>
				<br>
				
				Hotline:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="hotline"  placeholder="type the hospital hotline..."type="text"><br>
                                                
				<br>
				Rating:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input name="rating"  placeholder="type the hospital rating..."type="text"><br>
                
				<br>
				<br>
				
				<input name="submit" type="submit" value="Add"><br>
				<br>
			</form>
			<form  action="delete_hospital.php"method="post">
				<br>
				<select name="delete_hospital"  required="" style="width: 90px">
				<option value="">-- Select --</option>
				<?
                $user=$_COOKIE['username'];
	               $q=mysql_query("SELECT Name FROM hospital");
                   while($rows=mysql_fetch_array($q))
                   {?>
                <option><?echo $rows['Name'];?></option>   
                   			
				<?}?>
				
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                				 
				<input name="submit" type="submit" value="Delete"><br>
				<br>
			</form>
			<form  action="adminpanel.php?hoptions=2" method="post">
				<br>
				<select name="edit_hospital" required="" style="width: 90px">
				<option value="">-- Select --</option>
				<?
                $user=$_COOKIE['username'];
	               $q=mysql_query("SELECT * FROM hospital");
                   while($rows=mysql_fetch_array($q))
                   { $hid=$rows['H_ID'];?>
                <option value="<? echo $hid;?>"><?echo $rows['Name'];?></option>   
                   			
				<?}?>
				
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                				 
				<input name="submit" type="submit" value="Edit"><br>
				<br>
			</form>

            
            
            <?}else if($_REQUEST['hoptions']=='2'){
                if($_REQUEST['hod']==""){
                $hid=$_POST['edit_hospital'];}
                else{$hid=$_REQUEST['hod'];}
                $q=mysql_query("SELECT * FROM hospital WHERE H_ID='$hid'");
                $rows=mysql_fetch_array($q);
                $hname=$rows['Name'];
                $haddress=$rows['Address'];
                $hhotline=$rows['Hotline'];
                $hrating=$rows['Rating'];
                
                ?>
            <form action="edit_hospital.php?hod=<?echo $hid;?>" method="post">
				<br>
								Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				<input name="name" type="text" value="<?echo $hname;?>"  required=""   style="width 172px"><br>
                <?if($_REQUEST['error']=="1"){?>Invalid Name,Try another one<?}?><br>
				Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input name="address" value="<?echo $haddress;?>" type="text"><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				
                <?if($_REQUEST['error']=="2"){?>Invalid Address,Try another one<?}?>
				<br>
				
				Hotline:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="hotline" value="<?echo $hhotline;?>" type="text"><br>
                                                
				<br>
				Rating:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input name="rating" value="<?echo $hrating;?>" type="text"><br>
                
				<br>
				<br>
				
				<input name="submit" type="submit" value="Update"><br>
				<br>
			</form>
			
            
            <a href="adminpanel.php?soptions=1&hod=<?echo $hid;?>"><input name="spec_options" type="button" value="Specilization Options"></a><br><br>
            <?}else if($_REQUEST['soptions']=='1'){
                $hid=$_REQUEST['hod'];?>
            <form action="add_spec.php?hod=<?echo $hid;?>" method="post">
				<br>
								Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="name" required="">
                                <option value="">-- Select --</option>
                                <?
                                $q=mysql_query("SELECT * FROM specialization");
                                while($rows=mysql_fetch_array($q)){?>
                                <option><? echo $rows['Name']; ?></option>
                                
                                
                                <?}?>
                                
                                ?>
                                </select><br><br>
                
				Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<input name="price"  placeholder="type the specialization price in hospital..."type="text"><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				
                
				<br>
				
				Start Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="s_time"  placeholder="type the start time..."type="text"><br>
                                                
				<br>
				&nbsp;End Time:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input name="e_time"  placeholder="type the end time..."type="text"><br>
                
				<br>
				<br>
				<?
                $hid=$_REQUEST['hod'];?>
				<input name="submit" type="submit" value="Add"><br>
				<br>
			</form>
			<form  action="delete_spec.php?hod=<?echo $hid;?>" method="post">
				<br>
				<select name="delete_spec"  required="" style="width: 90px">
				<option value="">-- Select --</option>
				<?
                $hid=$_REQUEST['hod'];
	               $q=mysql_query("SELECT * FROM hospital_specialization WHERE H_ID='$hid'");
                   while($rows=mysql_fetch_array($q))
                   {?>
                <option><?echo $rows['Spec_Name'];?></option>   
                   			
				<?}?>
				
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                				 
				<input name="submit" type="submit" value="Delete"><br>
				<br>
			</form>
			<form  action="adminpanel.php?soptions=2&hod=<?echo $hid;?>" method="post">
				<br>
				<select name="edit_spec" required="" style="width: 90px">
				<option value="">-- Select --</option>
				<?
                $hid=$_REQUEST['hod'];
	               $q=mysql_query("SELECT * FROM hospital_specialization WHERE H_ID='$hid'");
                   while($rows=mysql_fetch_array($q))
                   {?>
                <option><?echo $rows['Spec_Name'];?></option>   
                   			
				<?}?>
								 
                                 </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="submit" type="submit" value="Edit"><br>
				<br>
			</form>

            
            
            
            <?}else if($_REQUEST['soptions']=='2'){
                
                
                $hid=$_REQUEST['hod'];
                if($_REQUEST['spec']=="")
                {$spec=$_POST['edit_spec'];}
                else{$spec=$_REQUEST['spec'];}
                $q=mysql_query("SELECT * FROM hospital_specialization WHERE H_ID='$hid' AND Spec_Name='$spec'");
                $rows=mysql_fetch_array($q);
                $price=$rows['Price'];
                $s_time=$rows['Start_Time'];
                $e_time=$rows['End_Time'];
                ?>
            <form action="edit_spec.php?hod=<?echo $hid;?>&spec=<?echo $spec;?>" method="post">
				<br>
								Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?echo $spec;?><br>
                <br>
				Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<input name="price" value="<?echo $price;?>" type="text"><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				
                
				<br>
				
				Start Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="s_time" value="<?echo $s_time;?>" type="text"><br>
                                                
				<br>
				End Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input name="e_time" value="<?echo $e_time;?>" type="text"><br>
                
				<br>
				<br>
				
				<input name="submit" type="submit" value="Update"><br>
				<br>
			</form>
			
            
            
            
            
            
            <?}?>
		</td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="184" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3" class="style3">
			<img src="images/Register_30.gif" width="1" height="79" alt=""></td>
		<td colspan="4" class="style3">
			<img src="images/Register_31.gif" width="179" height="22" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="22" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" class="style3">
			<img src="images/Register_32.gif" width="179" height="48" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="48" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" class="style3">
			<img src="images/Register_33.gif" width="179" height="9" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td colspan="5" rowspan="2" class="style3">
			<img src="images/Register_34.gif" width="180" height="213" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="188" alt=""></td>
	</tr>
	<tr>
		<td colspan="8" class="style3">
			<img src="images/Register_35.gif" width="451" height="25" alt=""></td>
		<td rowspan="2" class="style3">
			<img src="images/Register_36.gif" width="44" height="153" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="25" alt=""></td>
	</tr>
	<tr>
		<td colspan="5" class="style3">
			<img src="images/Register_37.gif" width="180" height="128" alt=""></td>
		<td colspan="8" class="style3">
			<img src="images/Register_38.gif" width="451" height="128" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="128" alt=""></td>
	</tr>
	<tr>
		<td class="style3">
			<img src="images/spacer.gif" width="12" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="7" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="24" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="113" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="52" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="50" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="5" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="12" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="21" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="139" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="259" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td class="style3">
			<img src="images/spacer.gif" width="44" height="1" alt=""></td>
		<td></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</div>
</body>
</html>