$(document).ready(function() {
	$(".itemButton a").click(function() {
		$.post("updateItem.php", {
			sectionID: $(".sectionEdit").text(),
			itemID: $(".itemEdit").text(),
			title: $(".titleEdit").text(),
			text: $(".textEdit").text()
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

$(".item").focus(function() {
	$(this).find(".itemButton").show();
	$(this).find(".itemButton .sectionID").addClass("sectionEdit");
	$(this).find(".itemButton .itemID").addClass("itemEdit");
	$(this).find(".itemTitle").addClass("titleEdit");
	$(this).find(".itemText").addClass("textEdit");
});

$(".item").focusout(function() {
	$(this).find(".itemButton").hide();
	$(this).find(".itemButton .sectionID").removeClass("sectionEdit");
	$(this).find(".itemButton .itemID").removeClass("itemEdit");
	$(this).find(".itemTitle").removeClass("titleEdit");
	$(this).find(".itemText").removeClass("textEdit");
});

$(".contactEdit").focus(function() {
	$(this).find(".contactButton").show();
});

$(".contactEdit").focusout(function() {
	$(this).find(".contactButton").hide();
});