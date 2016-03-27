$(document).ready(function() {

	$(".itemButton a").click(function() {
		var ids = $(this).parent().attr("id").split("-");
		var sectionId = ids[1];
		var itemId = ids[2];
		$.post("updateItem.php", {
			sectionID: sectionId,
			itemID: itemId,
			content: $("#" + sectionId + "-" + itemId).html(),
		}, function(response) {
			alert(response);
		});
	});

	$(".contactButton a").click(function() {
		$.post("updateItem.php", {
			telephone: $("#telephone").text(),
			address: $("#address").text(),
			email: $("#email").text()
		}, function(response) {
			alert(response);
		});
	});
});

// Shows the save buttin when an editable item is focused.
$(".item").focus(function() {
	$("#btn-" + $(this).attr("id")).show();
});

$(".item").focusout(function() {
	$("#btn-" + $(this).attr("id")).hide();
});

$(".contactEdit").focus(function() {
	$(this).find(".contactButton").show();
});

$(".contactEdit").focusout(function() {
	$(this).find(".contactButton").hide();
});
