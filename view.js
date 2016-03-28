$(document).ready(function() {

	$(".itemButton a").click(function() {
		alert("Button pressed!");
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

// Shows the save button when an editable item is focused.
$(".item").focus(function() {
	$("#btn-" + $(this).attr("id")).show();
});

// Hides the save button when an editable item is not focused anymore.
$(".item").focusout(function() {
	// Save the content
	var ids = $(this).attr("id").split("-");
	var sectionId = ids[0];
	var itemId = ids[1];
	$.post("updateItem.php", {
		sectionID: sectionId,
		itemID: itemId,
		content: $("#" + sectionId + "-" + itemId).html(),
	}, function(response) {
		if (response !== "200") alert("Någonting gick fel, innehållet kunde inte sparas.");
	});
	// Hide save button
	$("#btn-" + $(this).attr("id")).hide();
});

$(".contactEdit").focus(function() {
	$(this).find(".contactButton").show();
});

$(".contactEdit").focusout(function() {
	$(this).find(".contactButton").hide();
});

$(".scroll").click(function(event){
	var $anchor = $(this);
  $('html, body').stop().animate({
    scrollTop: ($($anchor.attr('href')).offset().top)
  }, 1250, 'easeInOutExpo');
  event.preventDefault();
});
