<?php $section = $controller->getSectionData($sectionID); ?>
<?php $i = 0; ?>
<?php foreach ($section["content"] as $item) { ?>
	<?php if(isset($_SESSION["id"])) { 
		echo "<div class = \"" . $item["class"] . " item\" contenteditable = \"true\">";
	} else {
		echo "<div class = \"" . $item["class"] . "\">";
	} ?>
		<div class = "itemTitle"><h3><?php echo $item["title"]; ?></h3></div>
		<div class = "itemText"><p align = "justify">
			<?php echo $item["text"]; ?>
		</p></div>
		<?php if(isset($_SESSION["id"])) { ?>
			<div class = "pull-right itemButton" style = "display: none; padding-bottom: 10px;">
				<div class = "sectionID" style = "display: none;"><?php echo $sectionID; ?></div>
				<div class = "itemID" style = "display: none;"><?php echo "item" . $i; ?></div>
				<a class = "btn btn-primary" contenteditable = "false">Spara</a>
			</div>
		<?php } ?>
	</div>
	<?php $i++; ?>
<?php } ?>