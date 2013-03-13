/*
| layout.contact.php functions
| for contact only
*/

(function() {
/*cache DOM vars*/
	var helper = $("#helper"),
			help = $("#help");
/*address noscripts*/
helper.addClass("hide");
help.removeClass("hidden");
/*hide/show popup help*/
	help.on('click', function(e) {
		e.preventDefault();
		helper.removeClass("hide");
		helper.addClass("displayed");
	});
/*popup helper*/
	var popWin = "";
	function openwin(url, strWidth, strHeight) {
		if (popWin !== "") { popWin.close(); }
		leftStr = (screen.width-strWidth)/2;
		topStr = (screen.height-strHeight)/2-50;
		windowProperties = "toolbar=no,menubar=no,scrollbars=no,statusbar=no,height="+strHeight+",width="+strWidth+",left="+leftStr+",top="+topStr+"";
		popWin = window.open(url,'newWin',windowProperties);
	}
})();