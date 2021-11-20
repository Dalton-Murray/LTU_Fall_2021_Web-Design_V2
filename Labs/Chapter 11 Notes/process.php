<!--- Dalton Murray -->

<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Title at top of tab</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>
<body>

	<?php
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		echo "Your username is: " .$username. " and your password is: " .$password;
	?>

</body>
</html>
