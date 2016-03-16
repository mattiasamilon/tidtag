<?php
	session_start();
	if(isset($_SESSION["id"])) {
		session_destroy();
		echo "Utloggad!";
	}
?>

<html>
	<head>
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<title>Tidtag - Logga in</title>
	</head>
	<body>
		<div class = "container">
			<div class = "col-md-4"></div>
			<form action = "login.php" method = "post" class = "col-md-4" style = "padding-top: 15%;">
				<div class = "form-group">
					<h2>Logga in</h2>
				</div>
				<div class = "form-group">
					<input type = "text" class = "form-control input-lg" name = "username" id = "username" placeholder = "Avändarnamn"></input>
				</div>
				<div class = "form-group">
					<input type = "password" class = "form-control input-lg" name = "password" id = "password" placeholder = "Lösenord"></input>
				</div>
				<div class = "form-group">
					<input type = "submit" class = "btn btn-primary btn-lg btn-block" id = "submit" value = "Logga in"></input>
				</div>
			</form>
		</div>
	</body>
</html>
