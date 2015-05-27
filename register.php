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
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background-image: url('images/light_blue_background_for_website.jpg')">
<!-- Save for Web Slices (Register.psd) -->
<table id="Table_01" width="769"  border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="2" rowspan="3">
			<img src="images/Register_01.gif" width="19" height="56" alt=""></td>
		<td colspan="4" rowspan="2">
		<a href="index.php">
			<img src="images/Register_02.gif" width="139" height="32" alt=""></a></td>
		<td rowspan="3">
			<img src="images/Register_03.gif" width="13" height="56" alt=""></td>
		<td colspan="6">
		<a href="services.php">
			<img src="images/Register_04.gif" width="141" height="31" alt=""></a></td>
		<td rowspan="9">
			<img src="images/Register_05.gif" width="13" height="397" alt=""></td>
		<td>
			<img src="images/Register_06.gif" width="139" height="31" alt=""></td>
		<td colspan="3" rowspan="9">
			<img src="images/Register_07.gif" width="304" height="397" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="31" alt=""></td>
	</tr>
	<tr>
		<td colspan="6" rowspan="2">
			<img src="images/Register_08.gif" width="141" height="25" alt=""></td>
		<td rowspan="8">
			<img src="images/Register_09.gif" width="139" height="366" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/Register_10.gif" width="139" height="24" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="24" alt=""></td>
	</tr>
	<tr>
		<td rowspan="14">
			<img src="images/Register_11.gif" width="12" height="968" alt=""></td>
		<td colspan="11"><a href="index.php">
			<img src="images/Register_12.gif" width="279" height="179" alt=""></a></td>
		<td rowspan="6">
			<img src="images/Register_13.gif" width="21" height="341" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="179" alt=""></td>
	</tr>
	<tr>
		<td colspan="11">
			<img src="images/Register_14.gif" width="279" height="100" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="100" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images/Register_15.gif" width="32" height="60" alt=""></td>
		<td colspan="4">
			<img src="images/Register_16.gif" width="179" height="51" alt=""></td>
		<td colspan="4" rowspan="3">
			<img src="images/Register_17.gif" width="68" height="61" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="51" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/Register_18.gif" width="179" height="9" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="10">
			<img src="images/Register_19.gif" width="31" height="629" alt=""></td>
		<td colspan="2" rowspan="4">
			<img src="images/Register_20.gif" width="2" height="209" alt=""></td>
		<td colspan="3" rowspan="3">
			<img src="images/Register_21.gif" width="178" height="25" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/Register_22.gif" width="55" height="1" alt=""></td>
		<td>
			<img src="images/Register_23.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/Register_24.gif" width="12" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td rowspan="8">
			<img src="images/Register_25.gif" width="50" height="627" alt=""></td>
		<td colspan="7">
			<img src="images/Register_26.gif" width="450" height="23" alt=""></td>
		<td colspan="2" rowspan="6">
			<img src="images/Register_27.gif" width="45" height="474" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="23" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" class="style1">
				<?
						include"checker.php";
						if(checker($_COOKIE['username'],$_COOKIE['password']))
						{$acc=$_COOKIE['acc_type'];
						  echo "<center>hello, ".$_COOKIE['username']."<br><a href='myaccount.php?type=$acc' >My Account</a>"."<br><a href='logout.php'>logout</a>";
						}else{
						?>
						
            <form  action="login.php" method="post">
				<input name="username"  required=""type="text" value="" placeholder="username" ><br>
				<br>
				<input name="password"  required=""type="password" placeholder="password"><br>
				<br>
				<input name="login" type="submit" value="Login">&nbsp;&nbsp;&nbsp;
				<a href="register.php?error=0">
				<input name="register" type="button" value="Register"></a></form><?}?>
	
		</td>
		<td colspan="7" rowspan="5" class="style2" valign="top">
        	<form action="signup.php" method="post">
				<br>
				Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input name="new_username" type="text" required="" placeholder="Type your new username..." style="width: 172px"><br>
                <?if($_REQUEST['error']=="1"){?>invalid username,try another one<?}?>
				<br><br>
				Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 				<input name="new_password" type="password" required="" placeholder="Type your new password..." style="width: 170px"><br>
                 <?if($_REQUEST['error']=="2"){?>password must be longer than 5 digits<?}?>
				<br>
				<br>
				Confirm Password: 				<input name="cnew_password" type="password" required="" placeholder="Confirm your password..." style="width: 170px"><br>
				 <?if($_REQUEST['error']=="3"){?>Confirmation password doesn't match password<?}?>
				<br><br>
				Account Type:<br>
				<select  name="acc_type" required="" style="height: 22px">
                <option value="">-- Select --</option>
				<option>Patient</option>
				<option>Doctor</option>
				<option>Pharmacy</option>
				</select><br>
				<br>
				<input name="sub" type="submit" value="submit"><br>
				<br>
			</form>
		</td>
		<td>
			<img src="images/spacer.gif" width="1" height="184" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="images/Register_30.gif" width="1" height="79" alt=""></td>
		<td colspan="4">
			<img src="images/Register_31.gif" width="179" height="22" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="22" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/Register_32.gif" width="179" height="48" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="48" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/Register_33.gif" width="179" height="9" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td colspan="5" rowspan="2">
			<img src="images/Register_34.gif" width="180" height="213" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="188" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">
			<img src="images/Register_35.gif" width="451" height="25" alt=""></td>
		<td rowspan="2">
			<img src="images/Register_36.gif" width="44" height="153" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="25" alt=""></td>
	</tr>
	<tr>
		<td colspan="5">
			<img src="images/Register_37.gif" width="180" height="128" alt=""></td>
		<td colspan="8">
			<img src="images/Register_38.gif" width="451" height="128" alt=""></td>
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
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="113" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="52" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="50" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="5" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="12" height="1" alt=""></td>
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