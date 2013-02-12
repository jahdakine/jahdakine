(function() {
/*
|	layout.blade.php functions
| common across site
*/

/* global vars */
	var $window = $(window),
			$document = $(document),
			link_toggle = $("#link-toggle");
/* flexible footer */
	var windowHeight = $window.innerHeight,
			headerHeight = $("header").height(),
			contentHeight = $("#content").height(),
			footerHeight = $("footer").height(),
			flexFooter = windowHeight - (headerHeight + contentHeight + footerHeight -76);
  function resizeFooter() {
    $(".flex-footer").css("min-height", flexFooter);
  }
  $window.load(resizeFooter);
  // !!! only working on load
  $window.resize(function() {
		//console.log(headerHeight + ' ' + contentHeight + ' ' + footerHeight + ' ' + flexFooter);
		resizeFooter();
  });
  $document.ready(function() {
		if(localStorage.getItem("link")) {
			link_style = localStorage.getItem("link");
		} else {
			link_style = "same-win";
		}
		(link_style === "new-win") ? localStorage.setItem("link", "same-win") : localStorage.setItem("link", "new-win");
		link_toggle.trigger('click');
  });
/*link toggle button click*/
	link_toggle.on('click', function(e) {
		var offsite = $(".offsite"),
		link_style = localStorage.getItem("link");
		e.preventDefault();
		offsite.each(function(i){
			var $this = $(this),
			title = $this.attr("title"),
			link = $this.html().substr(0,$this.html().length-1);
			// console.log(i,title,link,link_style);
			if(link_style === "new-win") {
				$this.removeAttr("target").attr("title","Offsite to " +link).removeClass("link-new-win").addClass("link-same-win").html(link+"&#8658;");
			} else {
				$this.attr('target', '_blank').attr("title", "Offsite to " +link+ " in a new window/tab").removeClass("link-same-win").addClass("link-new-win").html(link+"&#8663;");
			}
		});
		(link_style === "new-win") ? localStorage.setItem("link", "same-win") : localStorage.setItem("link", "new-win");
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
/*tooltips */
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
	$('acronym,dfn,abbr,.def').qtip( $.extend({}, shared, {
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
	// Google analytics
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38421734-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
})();

