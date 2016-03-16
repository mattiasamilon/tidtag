<?php

	/**
	 * Class that reads data in the form of json from 
	 * json-files in given directory.
	 */
	class DataReader {

		private $dir = "";

		/**
		 * Public constructor, just sets the data folder to be used
		 */
		public function __construct($dirName) {
			$this->dir = $dirName;
		}

		/**
		 * Returns the data from the specified file as a
		 * json-object
		 */
		public function getDataFromFile($fileName) {
			$rawData = file_get_contents($this->dir . "/" . $fileName);
			if($rawData === FALSE) {
				die("Internal error: Could not read data from " . $this->dir . "/" . $fileName);
			}
			$jsonData = json_decode($rawData, true);
			if($jsonData === NULL) {
				die("Internal error: Could not read data format of " . $this->dir . "/" . $fileName);
			}
			return $jsonData;
		}

		/**
		 * Writes given content to the given file. The resulting
		 * will have only content, all previous content will be
		 * overwritten.
		 */
		public function updateFile($fileName, $content) {
			$fp = fopen($this->dir . "/" . $fileName, "w") or die("Can't open file");
			fwrite($fp, json_encode($content));
			fclose($fp);
		}

		public function test() {
			echo "Datareader test";
		}
	}
?>