<?php
session_start();

if($_SESSION['captcha'] != $_POST['captcha']){
	$_SESSION['msg'] = 'Invalid Captcha';
	$_SESSION['color'] = 'red';
}else{
	$_SESSION['msg'] = 'Captcha is OK';
	$_SESSION['color'] = 'green';
}


?>
<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<table>
		<tr>
			<td>Simple Captcha</td>
			<td><img src="captcha.php" width="100" height="40" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="text" name="captcha" size="20" autocomplete="off" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Test Captcha"></td>
		</tr>
	</table>
</form>
<p style="color:<?php echo $_SESSION['color']; ?>;">
<?php echo $_SESSION['msg']; ?>
</p>
</body>
</html>


