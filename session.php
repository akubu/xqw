<?php
include('http://localhost/login.php');

if(isset($_SESSION['login_user']))
{
	header("location: http://localhost/profile.php");
}

?>
<html>
<script language=javascript>

</script>
<p>This is the main site</p>
<prev >
<form method=post action="">
	 Name<input name="t1" type=text placeholder="your name" required id="t"> <br>
	pass<input name="t2" type=password onclick=fn() placeholder="********"> <br>
	<input type=submit name="submit" value="submit"><span> <?php echo "*" . $error ; ?> </span>
</form>
</prev>
</html>
