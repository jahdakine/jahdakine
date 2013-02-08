/*
| layout.contact.php functions
| for contact only
*/

(function() {
	/*hide/show popup help*/
	$("#help").on('click', function(e) {
		e.preventDefault();
		$("#helper").removeClass("hidden");
		$("#helper").addClass("displayed");
	});
	var popWin = "";
	function openwin(url, strWidth, strHeight) {
		if (popWin !== "") { popWin.close(); }
		leftStr = (screen.width-strWidth)/2;
		topStr = (screen.height-strHeight)/2-50;
		windowProperties = "toolbar=no,menubar=no,scrollbars=no,statusbar=no,height="+strHeight+",width="+strWidth+",left="+leftStr+",top="+topStr+"";
		popWin = window.open(url,'newWin',windowProperties);
	}
})();