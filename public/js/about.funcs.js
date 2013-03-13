/*
| about.blade.php functions
| for about only
*/

(function() {
/*cache DOM vars*/
	h5nojs = $(".h5nojs"),
	courses_links = $("#courses-links");
	skills_links = $("#skills-links");
/*address noscripts*/
	h5nojs.remove();
	courses_links.removeClass('hide');
	skills_links.removeClass('hide');
	/*setup tabs*/
	$("#skills").tabs();
	$("#courses").tabs();
})();