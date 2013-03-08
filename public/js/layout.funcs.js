(function() {
/*
|	layout.blade.php functions
| common across site
*/

/* global vars */
	var $window = $(window),
			$document = $(document),
			link_toggle = $(".link-toggle"),
			color_toggle = $(".color-toggle"),
			top_link = $('#top-link'),
			aside = $("#aside"),
			windowHeight = $window.height(),
			headerHeight = $("header").height(),
			navHeight = $("#navigation").height(),
			contentHeight = $("#main").height(),
			footerHeight = $("footer").height(),
			flexFooter = 0;
/* Top link */
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
/* flexible footer */
  function resizeFooter() {
		flexFooter = $window.height() - (headerHeight + navHeight + contentHeight + footerHeight + 124);
		if (flexFooter < 250) { flexFooter = 250; } //don't squish the elephant!
    $(".pad").css("min-height", flexFooter);
  }
  $window.load(resizeFooter);
  var resizeTimer;
	$window.resize(function() {
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(resizeFooter, 200);
	});
/* store link color and style preference, activate top link */
  $document.ready(function() {
		//top link
		top_link.topLink({
			min: 50,
			fadeSpeed: 500
		});
		top_link.click(function(e) {
			e.preventDefault();
			$('body,html').animate({scrollTop:0},800);
		});
		//link external style
		if(localStorage.getItem("link")) {
			link_style = localStorage.getItem("link");
		} else {
			link_style = "same-win";
// console.log("no storage - setting default");
		}
// console.log("set to: "+link_style);
		(link_style == "new-win") ? localStorage.setItem("link", "new-win") : localStorage.setItem("link", "same-win");
		link_toggle.trigger('click');
		//link contrast color
		if(localStorage.getItem("color")) {
			link_color = localStorage.getItem("color");
		} else {
			link_color = "href-orig";
// console.log("no storage - setting default");
		}
// console.log("set to: "+link_color);
		(link_color == "href") ? localStorage.setItem("color", "href") : localStorage.setItem("color", "href-orig");
		color_toggle.trigger('click');
  });
/* link toggle button click */
	link_toggle.on('click', function(e) {
		var offsite = $(".offsite"),
		link_style = localStorage.getItem("link");
		e.preventDefault();
		offsite.each(function(i){
			var $this = $(this),
			title = $this.attr("title"),
			link = $this.html().substr(0,$this.html().length-1);
// console.log(i,title,link,link_style);
			if(link_style == "new-win") {
				$this.removeAttr("target").attr("title","Offsite to " +link).removeClass("link-new-win").addClass("link-same-win").html(link+"&#8658;");
			} else {
				$this.attr('target', '_blank').attr("title", "Offsite to " +link+ " in a new window/tab").removeClass("link-same-win").addClass("link-new-win").html(link+"&#8663;");
			}
		});
		(link_style == "new-win") ? localStorage.setItem("link", "same-win") : localStorage.setItem("link", "new-win");
// console.log("clicked: "+ link_style);
	});
/* color contrast toggle button click */
	color_toggle.on('click', function(e) {
		var onsite_link = $("#onsiteLink"),
				href = $(".href"),
				href_aside = $(".href-aside"),
				visited_link = $("#visitedLink"),
				href_orig = $(".href-orig"),
				href_aside_orig = $(".href-aside-orig"),
				link_color = localStorage.getItem("color");
		e.preventDefault();
		if(link_color == 'href') {
			href.removeClass('href hover visited').addClass('href-orig visited-orig hover-orig');
			href_aside.removeClass('href-aside').addClass('href-aside-orig');
			visited_link.removeClass('visited-aside').addClass('visited-aside-orig');
		} else {
			href_orig.removeClass('href-orig visited-orig hover-orig').addClass('href hover visited');
			href_aside_orig.removeClass('href-aside-orig').addClass('href-aside');
			visited_link.removeClass('visited-aside-orig').addClass('visited-aside');
		}
		(link_color == "href") ? localStorage.setItem("color", "href-orig") : localStorage.setItem("color", "href");
// console.log("clicked: "+ link_color);
	});
/* setup nickname pronunciation player */
	var audio = $('<audio>', {
				id	: "nickSound",
				src : "/audio/jahdakine.wav",
				//autoPlay : 'autoPlay',
				controls : 'controls'
			}),
			nick_button = $("#nickButton"),
			nick_hide = $("#nickHide"),
			audio_wrap = $("#audioWrap");
	//create player and show dismiss
	nick_button.on('click', function(e) {
		e.preventDefault();
		audio_wrap.prepend(audio);
		audio_wrap.attr("style", "padding-top: 1em; margin-top: 1em;");
		audio_wrap.css("display", "inline");
	});
	//remove player and hide dismiss
	nick_hide.on('click', function(e) {
		e.preventDefault();
		audio_wrap.css("display", "none");
		audio_wrap.attr("style", "padding: 0; margin: 0;");
	});
/* tooltips */
	//shared
	var shared = {
		position: {
				target: 'mouse',
				viewport: $window,
				my: 'top left',
				at: 'left bottom',
				adjust: {
					x: 15, y: 15, mouse: true //must move mouse off tip or it absorbs: http://craigsworks.com/projects/forums/thread-solved-onclick-event-on-tipped-item
				}
		},
		style: {
			tip: true,
			corner: true
		}
	};
	// Setup our first tooltip, adding some other options
	$('a,.href,.hover,.visited').qtip( $.extend({}, shared, {
		style: {
			classes: 'qtip-light-blue'
		}
	}));
	// Setup our second tooltip, again adding some new options
	$('acronym,dfn,abbr').qtip( $.extend({}, shared, {
		style: {
			classes: 'qtip-orange'
		}
	})).bind('click', function(event){ event.preventDefault(); return false; });
	//futuristic links created on the fly - !!! can't chain with shared?
	$('.flickr-img').live('mouseover', function(event) {
		$(this).qtip({
			overwrite: false,
			position: {
					target: 'mouse',
					viewport: $window,
					my: 'top left	',
					at: 'left bottom',
					adjust: {
						x: 15, y: 15, mouse: true
					}
			},
			style: {
				classes: 'qtip-light-blue'
			},
			show: {
				event: event.type,
				ready: true
			}
		}, event);
	});
	//what's this tooltip
	$('#whats-this').qtip( {
		content: {
			text: 'What\'s&nbsp;this?&nbsp;'
		},
		position: {
			target: $('header>h2:first'), //use the h2 since graphic is unobtainable
			my: 'top right',
			at: 'bottom right',
			adjust: {
				x: -278,
				y:6
			}
		},
		style: {
				classes: 'qtip-red' },
		show: {
			event: 'click',
			effect: function() {
				$(this).slideDown(500);
			}
		},
		hide: {
			event: 'mousemove',
			effect: function() {
				$(this).slideUp(250);
			}
		}
	});
})();