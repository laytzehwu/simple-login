<?php
// Some backend logic for the preparation
$message = "";
$username = $_POST['username'];
$password = $_POST['password'];
?>
<!DOCTYPE html>
<html>
	<head>
	   <title>Simple Form</title>
	</head>
	<body>
	    <h1> Simple Form </h1>
		<?= $message?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<input name="username" type="text" value="<?=$username?>">
			<input name="password" type="text" value ="<?=$password?>">
			<input type="submit">
		</form>
<?php
if ($username != "" && $password) {
	$bMatched = true;
	if (!preg_match('/^[A-Za-z]+$/', $username)) $bMatched = false;
	if (!preg_match('~[a-zA-Z]+~', $password)) $bMatched = false;
	if (!preg_match('~[0-9]+~', $password)) $bMatched = false;
	
	if ($bMatched) $message = "Good combination";
	else $message = "Try again";
?>
	<script>alert("<?=$message?>");</script>
<?php
}

?>		
	</body>
</html>