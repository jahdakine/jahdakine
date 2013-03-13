$(function() {

/*cache DOM vars*/
	accordion = $("#accordion"),
	accord_links = $(".accord-links");
/*address noscripts*/
	accord_links.addClass('href');
/*setup accordian*/
	accordion.accordion({
		collapsible: true,
		header: "> div > h3",
		heightStyle: "content"
	});
});