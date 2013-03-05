/*
| portfolio.blade.php functions
| for portfolio only
*/

(function() {
	/*setup tabs*/
	$("#projects").tabs();
	//cache DOM vars
	var project = $(".project"),
			clients = $(".clients"),
			tabs = $("#tabs"),
			box = $(".box"),
			body = $('html, body');
	//client tab clicks
	clients.on('click', function() {
		var tmp = this.innerHTML.replace(/\&.+/g, '').toLowerCase(),
				contentFrame = $(eval(tmp + "Frame"));
		box.empty();
	});
	//project clicks !!!use template for HTML
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
			url: '/partials/' + filename + '.html',
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
	jQuery.fn.topLink = function(settings) {
			settings = jQuery.extend({
			min: 1,
			fadeSpeed: 200
		}, settings);
		return this.each(function() {
			//listen for scroll
			var el = $(this);
			el.hide(); //in case the user forgot
			$(window).scroll(function() {
				if($(window).scrollTop() >= settings.min) {
					el.fadeIn(settings.fadeSpeed);
				} else {
					el.fadeOut(settings.fadeSpeed);
				}
			});
		});
	};
})();
$(document).ready(function() {
	$('#top-link').topLink({
		min: 400,
		fadeSpeed: 500
	});
	$('#top-link').click(function(e) {
    e.preventDefault();
		$('body,html').animate({scrollTop:0},800);
  });
});