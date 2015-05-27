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
			<?if($_REQUEST['type']=="Patient"&&$_REQUEST['C']!="add"&&$_REQUEST['C']!="edit"){
			 $user=$_COOKIE['username'];
			 $q=mysql_query("SELECT * FROM patient WHERE Name='$user'");
             $rows=mysql_fetch_array($q);
             $disease=$rows['Disease'];
             $history=$rows['History'];
             
             ?>
			<form action="patient_account.php" method="post">
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="username" type="text" value="<?echo $user?>" required="" placeholder=""<?echo $_COOKIE['username']?>""  style="width 172px"><br>
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
				Disease<br>
				<textarea name="disease" placeholder="<?echo $disease;?>" rows="2" style="width: 307px"></textarea><br>
				History<br>
				<textarea name="history" placeholder="<?echo $history;?> "rows="2" style="width: 307px"></textarea><br>Doctors:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select name="add_doctor" style="width: 90px">
				<option>-- Select --
                </option>
				<?
	               $qq=mysql_query("SELECT Name FROM doctor");
                   while($rrows=mysql_fetch_array($qq))
                   {?>
                <option><?echo $rrows['Name'];?></option>   
                   			
				<?}?>
				
				</select><br>
				<?
                $user=$_COOKIE['username'];
                $q=mysql_query("SELECT doctor.Name FROM doctor,doctor_patient,patient WHERE patient.Name='$user' AND doctor_patient.P_ID=patient.P_ID AND doctor.D_ID=doctor_patient.D_ID ");      
                while( $rows=mysql_fetch_array($q) )
               { echo $rows['Name'];?> - <?}
                
                ?>
				<br>Hospitals:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <select name="add_hospital" style="width: 90px">
				<option>-- Select --
                </option>
				<?
	               $qq=mysql_query("SELECT Name FROM hospital");
                   while($rrows=mysql_fetch_array($qq))
                   {?>
                <option><?echo $rrows['Name'];?></option>   
                   			
				<?}?>
				
				</select><br><?
                $user=$_COOKIE['username'];
                $q=mysql_query("SELECT hospital.Name FROM hospital,hospital_patient,patient WHERE patient.Name='$user' AND hospital_patient.P_ID=patient.P_ID AND hospital.H_ID=hospital_patient.H_ID ");      
                while( $rows=mysql_fetch_array($q) )
               { echo $rows['Name'];?> - <?}
                
                ?>
				<br>
				
				<input name="submit" type="submit" value="update"><br>
				
			</form><?}else if($_REQUEST['type']=="Doctor"&&$_REQUEST['C']!="add"&&$_REQUEST['C']!="edit"){
			 $user=$_COOKIE['username'];
             $q=mysql_query("SELECT * FROM doctor WHERE Name='$user'");
             $rows=mysql_fetch_array($q);
             $position=$rows['Position'];
             $spec=$rows['Spec_Name'];
             
             
             ?>
			<form action="doctor_account.php" method="post">
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
				Position&nbsp;&nbsp;&nbsp;&nbsp; <select name="position">
				<option>-- Select --</option>
				<option>General practational</option>
				<option>Assistant specialist</option>
				<option>Specialist</option>
				<option>Consultant</option>
				</select>&nbsp;&nbsp;<?echo $position;?><br>
				<br>
				Specialization: <select name="spec">
				<option>-- Select --</option>
				<? $qq=mysql_query("SELECT Name FROM specialization");
                   while($rrows=mysql_fetch_array($qq))
                   {?>
                <option><?echo $rrows['Name'];?></option>   
                   			
				<?}?>
				
				</select>&nbsp;&nbsp;<?echo $spec;?><br>
				<br>
				Hospitals:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <select name="add_hospital" style="width: 90px">
				<option>-- Select --
                </option>
				<?
	               $qq=mysql_query("SELECT Name FROM hospital");
                   while($rrows=mysql_fetch_array($qq))
                   {?>
                <option><?echo $rrows['Name'];?></option>   
                   			
				<?}?>
				
				</select><br><?
                $user=$_COOKIE['username'];
                $q=mysql_query("SELECT hospital.Name FROM hospital,hospital_doctor,doctor WHERE doctor.Name='$user' AND hospital_doctor.D_ID=doctor.D_ID AND hospital.H_ID=hospital_doctor.H_ID ");      
                while( $rows=mysql_fetch_array($q) )
               { echo $rows['Name'];?> - <?}
                
                ?>
				<br>
				
				<a href="myaccount.php?type=Doctor&C=add"><input name="add_clinic" type="button" value="Clinics Options"></a><br>
				<br>
				
				
				<input name="submit" type="submit" value="update"><br>
				<br>
			</form><?}else if($_REQUEST['type']=="Pharmacy"&&$_REQUEST['C']!="add"&&$_REQUEST['C']!="edit"){
			$user=$_COOKIE['username'];
			$q=mysql_query("SELECT * FROM pharmacy WHERE Name='$user'");
            $rows=mysql_fetch_array($q);
            $phone_num=$rows['Phone_Num'];
            $address=$rows['Address'];
             

			?>
			<form action="pharmacy_account.php" method="post">
				
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
&nbsp;&nbsp; Phone Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="phone_num" value="<?echo $phone_num; ?>"  type="text" style="width: 172px"><br>
				<?if($_REQUEST['error']=="5"){?>please enter numbers only,the length should be greater than 6 numbers<?}?>
				<br>
				Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="address" value="<?echo $address;?>" type="text" style="width: 175px"><br>
				<br>
				Add Medicine:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="add_medicine"  placeholder="add a medicine name..." type="text" style="width: 178px"><br>
				<br>
				Medicine Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="medicine_price"  placeholder="add a medicine price..." type="text" style="width: 178px"><br>
				<br>
				
				<input name="submit" type="submit" value="update">
			</form>
			<form action="delete_medicine.php" method="post">
				
				<select name="delete_medicine"  required="" style="width: 90px">
				<option value="">-- Select --</option>
				<?
                $user=$_COOKIE['username'];
	               $q=mysql_query("SELECT * FROM pharmacy,pharmacy_medicine WHERE pharmacy.Name='$user' AND pharmacy_medicine.PH_ID=pharmacy.PH_ID");
                   while($rows=mysql_fetch_array($q))
                   {?>
                <option><?echo $rows['Med_Name'];?></option>   
                   			
				<?}?>
				
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                				 
				<input name="submit" type="submit" value="Delete Medicine">
				
			</form>
			
			<?}else if($_REQUEST['C']=="add"){?>
			<form action="add_clinic.php" method="post">
				<br>
								Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				<input name="address" type="text"  required="" placeholder="type the clinic address..."  style="width 172px"><br>
                <?if($_REQUEST['error']=="1"){?>Invalid Address,Try another one<?}?>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;
				Phone Number: &nbsp;<input name="phone_num"  placeholder="type the clinic phone number..."type="text"><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				
                <?if($_REQUEST['error']=="2"){?>please enter numbers only,the length should be greater than 6 numbers<?}?>
				<br>
				
				Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="price"  placeholder="type the clinic price..."type="text"><br>
                                
				<br>
				Start Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input name="s_time"  placeholder="type the clinic start time..."type="text"><br>
                
				<br>
				<br>
				
				<input name="submit" type="submit" value="Add"><br>
				<br>
			</form>
			<form action="delete_clinic.php" method="post">
				<br>
				<select name="delete_clinic"  required="" style="width: 90px">
				<option value="">-- Select --</option>
				<?
                $user=$_COOKIE['username'];
	               $q=mysql_query("SELECT * FROM clinic,doctor WHERE doctor.Name='$user' AND clinic.D_ID=doctor.D_ID");
                   while($rows=mysql_fetch_array($q))
                   {?>
                <option><?echo $rows['Address'];?></option>   
                   			
				<?}?>
				
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                				 
				<input name="submit" type="submit" value="Delete"><br>
				<br>
			</form>
			<form action="edit_clinic1.php" method="post">
				<br>
				<select name="edit_clinic1" required="" style="width: 90px">
				<option value="">-- Select --</option>
				<?
                $user=$_COOKIE['username'];
	               $q=mysql_query("SELECT * FROM clinic,doctor WHERE doctor.Name='$user' AND clinic.D_ID=doctor.D_ID");
                   while($rows=mysql_fetch_array($q))
                   {?>
                <option><?echo $rows['Address'];?></option>   
                   			
				<?}?>
				
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                				 
				<input name="submit" type="submit" value="Edit"><br>
				<br>
			</form>

			<?}else if($_REQUEST['C']=="edit"){
			 $id=$_COOKIE['c_id'];
             $q=mysql_query("SELECT * FROM clinic WHERE C_ID='$id'");
             $rows=mysql_fetch_array($q);
             $address=$rows['Address'];
             $phone_num=$rows['Phone_Num'];
             $price=$rows['Price'];
             $s_time=$rows['Start_Time'];
             
             ?>
			<form action="edit_clinic2.php" method="post">
				<br>
								Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="address" type="text" value="<?echo $address;?>" required=""   style="width 172px"><br>
				<?if($_REQUEST['error']=="1"){?>Invalid Address,Try another one<?}?>
				<br>
				&nbsp;&nbsp;&nbsp;&nbsp;
				Phone Number: &nbsp;<input name="phone_num"  value="<?echo $phone_num; ?>" type="text"><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				
                <?if($_REQUEST['error']=="2"){?>please enter numbers only,the length should be greater than 6 numbers<?}?>
				<br>
				
				Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="price" value="<?echo $price;?>" type="text"><br>
                                
				<br>
				Start Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input name="s_time"  value="<?echo $s_time;?>" type="text"><br>
                
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