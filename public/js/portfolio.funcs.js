/*
| portfolio.blade.php functions
| for portfolio only
*/

(function() {
/*cache DOM vars*/
	h5nojs = $(".h5nojs"),
	projects = $("#projects"),
	tab_links = $("#tab-links");
/*address noscripts*/
	h5nojs.remove();
	tab_links.removeClass('hide');
/*setup tabs*/
	projects.tabs();
/*cache DOM vars*/
	var project = $(".project"),
			clients = $(".clients"),
			tabs = $("#tabs"),
			box = $(".box"),
			body = $('html, body');
/*address noscripts*/
project.attr("href","#");
/*client tab clicks*/
	clients.on('click', function() {
		var tmp = this.innerHTML.replace(/\&.+/g, '').toLowerCase(),
				contentFrame = $(eval(tmp + "Frame"));
		box.empty();
	});
/*project clicks !!!use template for HTML*/
	project.on('click', function(e) {
		e.preventDefault();
		box.empty();
		var $this = $(this),
				tmp = $(this).closest("div").attr("id"),
				contentFrame = $(eval(tmp + "Frame"));
				title = decodeURI(this.innerHTML),
				data = "",
				filename = title.replace(/\s+/g,'_').toLowerCase(),
				frag = '';
		if ($this.hasClass('no-image')) {
			frag = "'</h3><div id=\"project-desc\">' + data + '</div>'";
		} else {
			frag = "'</h3><div><img style=\"max-width:800px;\" src=\"/img/portfolio/'+ filename +'.jpg\" alt=\"Screenshot of '+ title +' project\"/ align=\"right\" class=\"project-img\"></div><div id=\"project-desc\">' + data + '</div>'";
		}
		$.ajax({
			url: '/partials/' + filename + '.php',
			cache: false
			}).done(function(data) {
				contentFrame.html(eval(frag));
				contentFrame.slideDown("slow", function() {
					body.animate({ scrollTop: tabs.offset().top }, 'slow');
				});
			}).error(function(e) {
				contentFrame.html("There has been an error retrieving the project information.");
				contentFrame.slideDown("slow");
		});
	});
})();