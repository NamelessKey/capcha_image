<form name="form1" method="post" action="index.php">
	<div align="center">
		<input name="Submit" type="submit" value="back">
	</div>
</form>
<div align="center">
<?php
	@session_start();
	$key=$_SESSION['count'];

	$imag = $_POST['number'];
	$user = md5($imag);
	//echo "$imag  =  =  = $key<br>";
	//echo("$user");
	if($user==$key)	{
		echo ("Verification success");
	}
	else{
		echo "You have entered wrong verification code!!<br> Please go back and enter proper value.";
	}
?>
</div>