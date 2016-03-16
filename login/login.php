<?php
	if(isset($_POST["username"]) && isset($_POST["password"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		if($username === "tidtag" && $password === "ibctw74fd82") {
			session_start();
			$_SESSION["username"] = $username;
			$_SESSION["id"] = 0;

			header("Location: /");
		} else {
			header("Location: /login");
		}
	} else {
		header("Location: /");
	}
?>