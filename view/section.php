<?php $section = $controller->getSectionData($sectionID); ?>
<?php $i = 0; ?>
<?php foreach ($section["content"] as $item) { ?>
	<?php $id = "" . $sectionID . "-item" . $i; ?>
	<?php echo "<div class = \"" . $item["class"] . "\">"; ?>
	<?php if(isset($_SESSION["id"])) {
		echo "<div id = \"" . $id . "\" class = \"item\" contenteditable = \"true\">";
	} else {
		echo "<div id = \"" . $id . "\">";
	} ?>
			<?php echo $item["content"]; ?>
		</div>
		<?php /*if(isset($_SESSION["id"])) {
			echo "<div id = \"btn-" . $id . "\" class = \"pull-right itemButton\" style = \"display: none; padding-bottom: 10px;\">";
				<a class = "btn btn-primary">Spara</a>
			</div>
		} */?>
		</div>
	<?php $i++; ?>
<?php } ?>
