<html>
<head>
<title>My Hospital Guide</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.style1 {
	text-align: center;
	background-image: url('images/Index_30.gif');
}
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="background-image: url('images/light_blue_background_for_website.jpg')">
<!-- Save for Web Slices (Services.psd) -->
<table id="Table_01" width="769"  border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td colspan="2" rowspan="3">
			<img src="images/Services_01.gif" width="19" height="56" alt=""></td>
		<td colspan="3" rowspan="2"><a href="index.php">
			<img src="images/Services_02.gif" width="139" height="32" alt=""></a></td>
		<td rowspan="3">
			<img src="images/Services_03.gif" width="13" height="56" alt=""></td>
		<td colspan="4"><a href="services.php">
			<img src="images/Services_04.gif" width="141" height="31" alt=""></a></td>
		<td rowspan="11">
			<img src="images/Services_05.gif" width="13" height="482" alt=""></td>
		<td colspan="5">
			<a href="index.php?contact=1"><img src="images/Index_06.gif" width="139" height="31" alt=""></a></td>
		<td colspan="6" rowspan="7">
			<img src="images/Services_07.gif" width="304" height="395" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="31" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="2">
			<img src="images/Services_08.gif" width="141" height="25" alt=""></td>
		<td colspan="5" rowspan="6">
			<img src="images/Services_09.gif" width="139" height="364" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/Services_10.gif" width="139" height="24" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="24" alt=""></td>
	</tr>
	<tr>
		<td rowspan="17">
			<img src="images/Services_11.gif" width="12" height="968" alt=""></td>
		<td colspan="8"><a href="index.php">
			<img src="images/Services_12.gif" width="279" height="179" alt=""></a></td>
		<td rowspan="8">
			<img src="images/Services_13.gif" width="21" height="426" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="179" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">
			<img src="images/Services_14.gif" width="279" height="100" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="100" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images/Services_15.gif" width="32" height="60" alt=""></td>
		<td colspan="3">
			<img src="images/Services_16.gif" width="179" height="51" alt=""></td>
		<td colspan="2" rowspan="6">
			<img src="images/Services_17.gif" width="68" height="147" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="51" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/Services_18.gif" width="179" height="9" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="13">
			<img src="images/Services_19.gif" width="31" height="629" alt=""></td>
		<td colspan="4">
			<img src="images/Services_20.gif" width="180" height="1" alt=""></td>
		<td colspan="3" rowspan="4">
			<img src="images/Services_21.gif" width="103" height="87" alt=""></td>
		<td colspan="4" rowspan="3">
		<a href="search.php?Indicator=specilization">
			<img src="images/Services_22.gif" width="143" height="55" alt=""></a></td>
		<td colspan="4" rowspan="4">
			<img src="images/Services_23.gif" width="197" height="87" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/Services_24.gif" width="180" height="26" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="26" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="4" class="style1">
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
		<td>
			<img src="images/spacer.gif" width="1" height="28" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="7">
			<img src="images/Services_26.gif" width="143" height="268" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="32" alt=""></td>
	</tr>
	<tr>
		<td rowspan="9">
			<img src="images/Services_27.gif" width="57" height="542" alt=""></td>
		<td colspan="5">
		<a href="search.php?Indicator=hospital">
			<img src="images/Services_28.gif" width="128" height="54" alt=""></a></td>
		<td rowspan="6">
			<img src="images/Services_29.gif" width="20" height="236" alt=""></td>
		<td rowspan="6">
			<img src="images/Services_30.gif" width="16" height="236" alt=""></td>
		<td colspan="2">
		<a href="search.php?Indicator=doctor">
			<img src="images/Services_31.gif" width="126" height="54" alt=""></a></td>
		<td rowspan="9">
			<img src="images/Services_32.gif" width="55" height="542" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="54" alt=""></td>
	</tr>
	<tr>
		<td colspan="5" rowspan="5">
			<img src="images/Services_33.gif" width="128" height="182" alt=""></td>
		<td colspan="2" rowspan="5">
			<img src="images/Services_34.gif" width="126" height="182" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="59" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/Services_35.gif" width="180" height="31" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="31" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/Services_36.gif" width="1" height="57" alt=""></td>
		<td colspan="3">
			<img src="images/Services_37.gif" width="179" height="48" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="48" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/Services_38.gif" width="179" height="9" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="9" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="3">
			<img src="images/Services_39.gif" width="180" height="213" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="35" alt=""></td>
	</tr>
	<tr>
		<td colspan="4" rowspan="3">
			<img src="images/Services_40.gif" width="52" height="306" alt=""></td>
		<td colspan="3">
		<a href="search.php?Indicator=pharmacy">
			<img src="images/Services_41.gif" width="127" height="53" alt=""></a></td>
		<td colspan="2" rowspan="3">
			<img src="images/Services_42.gif" width="81" height="306" alt=""></td>
		<td colspan="3">
		<a href="search.php?Indicator=medicine">
			<img src="images/Services_43.gif" width="127" height="53" alt=""></a></td>
		<td rowspan="3">
			<img src="images/Services_44.gif" width="46" height="306" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="53" alt=""></td>
	</tr>
	<tr>
		<td colspan="3" rowspan="2">
			<img src="images/Services_45.gif" width="127" height="253" alt=""></td>
		<td colspan="3" rowspan="2">
			<img src="images/Services_46.gif" width="127" height="253" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="125" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/Services_47.gif" width="180" height="128" alt=""></td>
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
			<img src="images/spacer.gif" width="57" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="11" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="21" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="13" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="7" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="76" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="20" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="31" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="5" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="76" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="31" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="16" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="80" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="46" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="55" height="1" alt=""></td>
		<td></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>