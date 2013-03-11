/*
| layout.blade.php functions
| for index only
*/

/*!!! TODO */
//make OOP - maybe next iteration
//CACHE jSON
//get square size from flickr
//use carouFredSel method to resize

(function() {
	//cache DOM vars
	var list = $("#list"),
			list_img = $(".listImg"),
			carousel = $("#carousel"),
			carousel_li = $("#carousel>*>li"),
			block1 = $(".block1"),
			block2 = $(".block2"),
			block3 = $(".block3"),
			menu_text = $(".menuText"),
			menu_graphics = $(".menuGraphics"),
			c1 = $("#ctrls1"),
			c2 = $("#ctrls2"),
			c3 = $("#ctrls3"),
			c4 = $("#ctrls4"),
			c5 = $("#ctrls5"),
			c6 = $("#ctrls6"),
			ctrls = $("#ctrls");
			reset = $("#reset"),
			note_flip = $("#note-flip"),
			feed_btn = $(".feedBtn"),
			content_frame = $("#contentFrame"),
			aside = $("#aside"),
			land_aside = $(".landAside"),
			legend = $("#legend"),
			carousel_help = $("p#carouselHelp"),
			num2Scroll = 1,
			dir2Scroll = "right",
			url = window.location.search,
			url_no_params = url.split("?")[0];
/*!!!pre-load carousel images*/
/*setup carousel slider*/
	function setCarousel(num2Scroll, dir2Scroll) {
		carousel.carouFredSel({
			align						: "center",
			width						: "100%",
			onWindowResize	: 'throttle',
			items						: Math.round(window.innerWidth/200),
			scroll					: window.num2Scroll,
			direction       : window.dir2Scroll,
			swipe						: {
          onTouch			: true
      },
			prev						: {
        button				: c2
			},
			next						: {
        button				: c5
			}
		}, {
					debug       : false // !!! production  - set to false
		});
	}
	//!!!Fire carousel on resize - is there a method for this (check API)?
	$(window).resize(function(dir2Scroll) {
		if(list_img.css("display") !== "none") {
			setCarousel(window.num2Scroll, window.dir2Scroll); //!!!dont reset
		}
	});
	content_frame.css("display","none");
	/*setup links*/
	list_img.css("display","none"); //hides images embedded in links
	//nav menu clicks - text
	menu_text.on('click', function(e) {
		e.preventDefault();
		if(!ctrls.hasClass("transparent")) {
			list_img.hide(); //hides images embedded in links
			carousel.trigger("destroy", "origOrder");
			list.removeClass("list-carousel");
			list.addClass("list-text");
			carousel.removeAttr("style");
			//add 3 col lis back in
			block1.wrapAll('<ul id="t1"></ul>');
			block2.wrapAll('<ul id="t2"></ul>');
			block3.wrapAll('<ul id="t3"></ul>');
			ctrls.addClass("transparent");
			menu_text.addClass("current").parent().addClass("current");
			menu_graphics.removeClass("current").parent().removeClass("current");
			menu_text.addClass("hide");
			menu_graphics.removeClass("hide");
			carousel_help.fadeOut("fast");
			history.pushState('text','Home',url_no_params+'?state=text-list');
		}
	});
	//nav menu clicks - graphics
	menu_graphics.on('click', function(e, num2Scroll, dir2Scroll) {
		e.preventDefault();
		if(list_img.css("display") !== "inline-table") {
			list_img.css("display","inline-table"); //displays hidden images embedded in links
			list.removeClass("list-text");
			list.addClass("list-carousel");
			carousel_li.unwrap();
			setCarousel(window.num2Scroll, window.dir2Scroll);
			ctrls.removeClass("transparent").center({vertical: false});
			menu_graphics.addClass("current").parent().addClass("current");
			menu_text.removeClass("current").parent().removeClass("current");
			menu_graphics.addClass("hide");
			menu_text.removeClass("hide");
			carousel_help.fadeIn(2000);
			history.pushState('graphics','Home',url_no_params+'?state=img-list');
		}
	});
	/*reset button click*/
	reset.on('click', function(e) {
		e.preventDefault();
		content_frame.fadeOut("slow", function() {
			content_frame.empty();
			land_aside.fadeIn("slow");
			legend.fadeIn("slow");
		});
		reset.addClass("current");
		reset.parent().addClass("current"); //sets the parent li - otherwise hover color bleeds thru padding
	});
	/*note flipper */
	note_flip.on('click', function(e) {
		e.preventDefault();
		var next = 0;
		for(i=1;i<5;i++){
			if(eval($("#note"+i)).hasClass('show')){
				eval($("#note"+i)).removeClass().addClass("hide");
				if(i===4){
					next = 1;
					$("#todo").text("To do:");
				} else {
					next = i+1;
					$("#todo").text("Past to dos:").addClass("note-font");
				}
			}
		}
		eval($("#note"+next)).removeClass().addClass("show");

	});
	/*carousel controls*/
	c1.on('click', function(e, num2Scroll, dir2Scroll) { //slow down num2Scroll
		e.preventDefault();
		if(window.num2Scroll > 1) {
			carousel.trigger("configuration", ["scroll", window.num2Scroll-=1]);
			carousel.trigger("play");
		}
	});
	c2.on('click', function(e, num2Scroll, dir2Scroll) { //scroll backward
		e.preventDefault();
		carousel.trigger("configuration", ["direction", "right"]);
		carousel.trigger("play");
	});
	c3.on('click', function(e, num2Scroll, dir2Scroll) { //pause scroll
		e.preventDefault();
		carousel.trigger("pause", true);
	});
	c4.on('click', function(e, num2Scroll, dir2Scroll) { //start scroll
		e.preventDefault();
		if(!carousel.triggerHandler("isScrolling")) {
			carousel.trigger("play", [window.dir2Scroll, true]);
		} else {
			carousel.trigger("resume");
		}
	});
	c5.on('click', function(e) { //scroll forward
		e.preventDefault();
		carousel.trigger("configuration", ["direction", "left"]);
		carousel.trigger("play");
	});
	c6.on('click', function(e, num2Scroll, dir2Scroll) { //speed up scroll
		e.preventDefault();
		var numVisible = carousel.triggerHandler("configuration", "items.visible");
		if(window.num2Scroll < numVisible) {
			carousel.trigger("configuration", ["scroll", window.num2Scroll+=1]);
			carousel.trigger("play");
		}
	});
	/*!!!feed click handler - I'm sure there's a better way*/
	feed_btn.on('click', function(e) {
		var id = this.id,
				html = '<h2 class="to-center">Latest ' +id.substr(0,1).toUpperCase()+id.substr(1)+ ' Updates</h2><ul class="nolist">',
				http = '',
				obj = '',
				date = '',
				show = '',
				tmp = '',
				limit = 5,
				closer = "</ul>";
				success = false;
				show = "content_frame.css('display','inline').removeClass('image-matrix')";
		switch (id) {
			case ('linkedin'):
				http='';
				//html += '<h3 class="to-center">Recommendations</h3>';
				//tmp=recosHTML;
				break;
			case ('blogger'):
				http = 'https://www.googleapis.com/blogger/v3/blogs/2575251403540723939/posts?key=AIzaSyC4Zhv-nd_98_9Vn8Ad3U6TjY99Pd2YzOQ';
				obj = 'data.items';
				tmp = "'<li><time datetime=\"' + item.updated + '\">' + item.updated.substr(0,10) + '</time>: <a href=\"' + item.url + '\" target=\"_blank\">' + item.title + '</a></li>'";
        limit = 5;
        break;
      case ('twitter'):
				http = 'http://search.twitter.com/search.json?q=jahdakine&callback=?';
				obj = 'data.results';
				tmp = "'<li><img src=\"' +item.profile_image_url+ '\" height=\"25\" width=\"25\" alt=\"profile icon\"/>&nbsp;<time datetime=\"' +item.created_at.split(' ').slice(0, 4).join(' ')+ '\">' +item.created_at.split(' ').slice(0, 4).join(' ')+ '</time>:&nbsp;<a href=\"http://twitter.com/jahdakine/status/' +item.id_str+ '\" target=\"_blank\">' +item.text+ '</a></li>'";
        limit = 10;
        break;
      case ('flickr'):
				html = "<div id='flickr-container'>";
				closer = "</div><div class=\"clear-fix\">";
				http = 'http://api.flickr.com/services/feeds/photos_public.gne?id=23019891@N00&lang=en-us&format=json&jsoncallback=?';
				obj = 'data.items';
				tmp = "'<div><a href=\"' + item.link + '\" target=\"_blank\" class=\"flickr-img\" title=\"Open Flickr page titled &#34;' + item.title + '&#34; in a new window/tab\"><img src=\"' + item.media.m + '\" /></a></div>'";
				show = "content_frame.css('display','block').addClass('image-matrix')";
				limit = 20;
        break;
			case ('meetup'): //venue=1139097 member=65732862 group=1769691 group_urlname=HTML5-Denver-Users-Group
				http="false";
				// http = 'http://api.meetup.com/activity?_=1361290215235&member_id=65732862&format=json&sig_id=65732862&sig=7be5cdcf1093d70515959c1b785e75c67f9c642f';
				// obj = 'data';
				// tmp = "'<li><li>'";
				// limit = 3;
				break;
			case ('grooveshark'):
				http="false";
				break;
			case ('github'):
				http="false";
				//http = "https://api.github.com/repos/jahdakine/jahdakine/commits?callback=getFeed";
				obj = 'data';
				limit = 5;
				break;
			case ('youtube'):
				http="https://gdata.youtube.com/feeds/api/users/jahdakine/uploads?v=2&alt=json";
				obj = "data.feed.entry";
				tmp = "'<li><time datetime=\"' + item.updated.$t + '\">' +item.updated.$t.substr(0,10) + '</time>: <a href=\"' +item.link[0].href+ '\" title=\"Open' +item.title.$t+ 'in a new window\" target=\"_blank\">' +item.title.$t+ '</a></li>'";
				break;
			case ('stackoverflow'):
				http="false";
				break;
			case ('yelp'):
				http="false";
				break;
			case ('ebay'):
				http="false";
				break;
			case ('gmail'):
				http="false";
				break;
			case ('icloud'):
				http="false";
				break;
			case ('vimeo'):
				http="false";
				break;
			case ('netflix'):
				http="false";
				break;
			case ('evernote'):
				http="false";
				break;
			case ('picassa'):
				http="false";
				break;
			case ('fandango'):
				http="false";
				break;
			case ('gnerdl'):
				http="false";
				break;
			case ('google'):
				http = 'https://www.googleapis.com/plus/v1/people/114704033710627861845/activities/public?key=AIzaSyC7qL3rj2BltH6GV6WOjovK3zuuS5sy024';
				obj = 'data.items';
				tmp = "'<li><img src=\"' +item.actor.image.url+ '\" alt=\"\" height=\"25\" width=\"25\"/>&nbsp;<time datetime=\"' + item.updated + '\">' + item.updated.substr(0,10) + '</time>: <a href=\"' + item.url + '\" target=\"_blank\">' + item.object.attachments[0].content.substr(0,50) + '...</a></li>'";
        limit = 5;
				break;
			case ('zazzle'):
				tmp = ["<embed wmode=\"transparent\" src=\"http://www.zazzle.com/utl/getpanel?zp=117573488824205121\" FlashVars=\"feedId=117573488824205121\" width=\"450\" height=\"300\" type=\"application/x-shockwave-flash\"></embed>",
						"<embed wmode=\"transparent\" src=\"http://www.zazzle.com/utl/getpanel?zp=117453752667062082\" FlashVars=\"feedId=117453752667062082\" width=\"450\" height=\"300\" type=\"application/x-shockwave-flash\"></embed>",
						"<embed wmode=\"transparent\" src=\"http://www.zazzle.com/utl/getpanel?zp=117631920418883930\" FlashVars=\"feedId=117631920418883930\" width=\"450\" height=\"300\" type=\"application/x-shockwave-flash\"></embed>"];
				break;
    }
    //put html into content frame
    function appendDOM(html) {
			//console.log(html);
			if(reset.hasClass("current")) {
				reset.removeClass("current");
				land_aside.fadeOut("slow");
				legend.hide();
			} else {
				content_frame.hide();
			}
			content_frame.fadeIn("slow", function() {
				eval(show);
			}).html(html);
    }
    //make xhr request
		function getFeed(http, obj, tmp, html, id) {
			//console.log(http);
			//!!!cache? Would need to use local storage or DB or jquery-json.2.4.0
			if(http !== '') {
				return $.getJSON(http, function(data) {
					success = true;
					//console.log("data: " + data);
					$.each(eval(obj), function(i,item) {
							//console.log(item);
							if(id === 'google' && item.object.attachments[0].content.substr(-4) === '.jpg') {
								tmp = "'<li><img src=\"' +item.actor.image.url+ '\" alt=\"\" height=\"25\" width=\"25\"/>&nbsp;<time datetime=\"' + item.updated + '\">' + item.updated.substr(0,10) + '</time>: <a href=\"' + item.url + '\" target=\"_blank\"><img src=\"' + item.object.attachments[0].fullImage.url + '\" height=\"150\" width=\"150\" alt=\"\" class=\"feedStyle\"/></a></li>'";
							}
							html += eval(tmp);
							//console.log(html);
							if(i > limit) { return false; }
						});
					if(id !== 'flickr' && html.search("<li>") === -1) {
						html+='<li><img src="/img/warning-icon.png" height="16" width="16" alt=""/>&nbsp;Sorry, nothing today!</li>';
					}
					html += closer;
					appendDOM(html);
				});
			//non-standard feed
			} else {
				success = true;
				if(id==='zazzle') {
					var rand = Math.floor((Math.random()*3));
					html = '<h2 class="to-center">Latest Zazzle Products</h2><div class="to-center">' +tmp[rand]+ "</div>";
				} else {
					html += tmp;
				}
				//console.log(html);
				appendDOM(html);
			}
		}
		getFeed(http, obj, tmp, html, id);
		//ERROR: Can be tested by commenting appendDOM(html) line in getFeed
		setTimeout(function() {
			if (!success) {
				html = '<h2 class="to-center">Timed out!</h2><blockquote>The request for ' +id.substr(0,1).toUpperCase()+id.substr(1)+ ' data has timed out. Please try again later.</blockquote>';
				appendDOM(html);
			}
		}, 2000);
	});
/* Check for state */
	if(url === '?state=img-list') {
		menu_graphics.trigger('click');
	}
	if(url === '?state=txt-list') {
		menu_text.trigger('click');
	}
	if(window.history && history.pushState) {
		$(window).on('popstate', function(e, url) {
			if(e.originalEvent.state &&  e.originalEvent.state === 'graphics') {
				menu_graphics.trigger('click');
			}
			if(e.originalEvent.state && e.originalEvent.state === 'text') {
				menu_text.trigger('click');
			}
		});
	}
})();