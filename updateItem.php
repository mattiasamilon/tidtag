<?php
	/**
	 * This file just takes the posted title and text to be saved 
	 * and updates the corresponding item file with them.
	 */
	if(isset($_POST["sectionID"]) && isset($_POST["itemID"]) && isset($_POST["title"]) && isset($_POST["text"])) {
		require "controller.php";
		$controller = new Controller();

		$controller->updateItem($_POST["sectionID"], $_POST["itemID"], $_POST["title"], $_POST["text"]);

		echo "Sparat";
	} else if(isset($_POST["telephone"]) && isset($_POST["address"]) && isset($_POST["email"])) {
		require "controller.php";
		$controller = new Controller();

		$controller->updateContact($_POST["telephone"], $_POST["address"], $_POST["email"]);

		echo "Sparat";
	} else {
		echo "Innehållet kunde inte sparas";
	}

?>