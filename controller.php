<?php
	require "model.php";

	/**
	 * Controller object that supposedly provides all
	 * necessary communication between view and model.
	 */
	class Controller {
		private $dr = NULL;

		/**
		 * Creates a new Controller containing a Datareader object
		 */
		public function __construct() {
			$this->dr = new DataReader("data");
		}

		/**
		 * Returns the array representation of the of the json
		 * data for the given section.
		 */
		public function getSectionData($sectionID) {
			return $this->dr->getDataFromFile($sectionID . ".json");
		}

		/**
		 * Updates the specified item with the given content. Then
		 * writes it back to the "database" file.
		 */
		public function updateItem($sectionID, $itemID, $title, $text) {
			$sectionData = $this->dr->getDataFromFile($sectionID . ".json");
			$sectionData["content"][$itemID]["title"] = $title;
			$sectionData["content"][$itemID]["text"] = $text;
			$this->dr->updateFile($sectionID . ".json", $sectionData);
		}

		/**
		 * Updates the contact details in the contact.json file.
		 */
		public function updateContact($telephone, $address, $email) {
			$sectionData = $this->dr->getDataFromFile("contact.json");
			$sectionData["telephone"] = $telephone;
			$sectionData["address"] = $address;
			$sectionData["email"] = $email;
			$this->dr->updateFile("contact.json", $sectionData);
		}

		public function testPrint() {
			$s = $this->dr->getDataFromFile("test.json");
			echo $s["title"] . "<br>" . $s["content"]["subTitle"];
		}
	}

?>