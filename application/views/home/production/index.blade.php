@layout('layout')

@section('title') Home @endsection

@section('header')		
<style>
	.landing { padding:0 1em 1em 1em; margin-top:0; }
	.separator { background-color: #333; height:36px; margin-bottom:0; }
	/*
	| Image Matrix
	*/
	.image-matrix {
	  width:100%;
	  text-align:center;
	  margin: 7px auto;
	}
	.image-matrix div {
	  display:inline;
	  margin:10px 0;
	}
	.image-matrix a img {

	  width: 150px;
	  height: 150px;
	  background-color: white;
	  padding: 9px;
	  margin: 7px;
	  position: relative;
	}
	/*
	| List Carousel
	*/
	.list {
	  background-color: #ccc !important;
	}
	.list-carousel {
	  padding: 15px 18px 15px 18px;
	}
	.list-carousel ul {
	  padding: 0;
	  margin: 0;
	  list-style: none;
	  display: block;
	}
	.list-carousel li {
	  font-size: 12px;
	  color: #666;
	  text-align: center;
	  border: 5px solid #bbb;
	  width: 158px;
	  height: 158px;
	  padding: 0;
	  margin: 2px;
	  display: block;
	  float: left;
	}
	.clear-fix {
	  float: none;
	  clear: both;
	}
	/*
	| List Text
	*/
	.list-text {
	  width: 100%;
	  vertical-align: top;
	}
	#t1, #t2 {
	  width: 33%;
	  padding: 10px;
	  float:left;
	  list-style: none;
	}
	#t3 {
	  width:auto;
	  padding: 10px;
	  float:left;
	  list-style: none;
	}
	/*
	| Frames
	*/
	#contentFrame {
	  display:none;
	  list-style:none;
	  margin: 1em auto;
	  padding: 5px;
	  width: 100%;
	}
	/*
	| Sticky notes
	*/
	.notes {
	  width:50%;
	  margin: 50px auto;
	  padding: 10px;
	  position: relative;
	  -webkit-box-shadow: 10px 10px 20px rgba(0,0,0,.15);
	  -moz-box-shadow: 10px 10px 20px rgba(0,0,0,.15);
	  box-shadow: 10px 10px 20px rgba(0,0,0,.15);
	  background-color: #fcf59b;  
	  font-family: 'Special Elite', cursive;
	}
	.notes li {
	  list-style: square;
	  color: #2972A3;
	  line-height: 1em;
	  margin-bottom: 20px;
	}
	/*
	| Carousel controls
	*/
	.controls {
	  z-index: 1000;
	  list-style: none;
	  position: fixed;
	  margin:0;
	  margin-left: auto;
	  margin-right: auto;
	  left: 50%; 
	  padding:5px 0 0 0;
	}
	#ctrls1, #ctrls2, #ctrls3, #ctrls4, #ctrls5, #ctrls6 {   
	  display: inline-table;
	  text-decoration:none;
	  background-image:url('/img/controls-spritesheet.png');
	  background-repeat: no-repeat;  
	  width:23px; height:25px;
	}
	#ctrls1 { background-position: 0 0; }
	#ctrls2 { background-position: 0 -25px; }
	#ctrls3 { background-position: 0 -50px; }
	#ctrls4 { background-position: 0 -75px; }
	#ctrls5 { background-position: 0 -100px; }
	#ctrls6 { background-position: 0 -125px; }

	#linkedin, #github, #google, #stackoverflow, #youtube, #twitter , #flickr, #blogger, #zazzle, #ebay, #grooveshark, #meetup, #evernote, #picassa, #fandango, #yelp, #icloud, #vimeo, #netflix, #skype, #gmail, #carou22, #carou23, #carou24, #carou25 {   
	  display: inline-table;
	  text-decoration:none;
	  background-image:url('/img/carousel-spritesheet.png');
	  background-repeat: no-repeat;  
	  width:128px; height:128px;
	}
	#carou1 { background-position: 0 0; }
	#fandango { background-position: 0 -128px; }
	#ebay { background-position: 0 -256px; }
	#blogger { background-position: 0 -386px; }
	#evernote { background-position: 0 -512px; }
	#flickr { background-position: -128px 0; }
	#github { background-position: -128px -128px; }
	#google { background-position: -128px -256px; }
	#grooveshark { background-position: -128px -386px; }
	#linkedin { background-position: -128px -512px; }
	#netflix { background-position: -256px 0; }
	#picassa { background-position: -256px -128px; }
	#skype { background-position: -256px -256px; }
	#icloud { background-position: -256px -386px; }
	#meetup { background-position: -256px -512px; }
	#stackoverflow { background-position: -386px 0; }
	#twitter { background-position: -386px -128px; }
	#vimeo { background-position: -386px -256px; }
	#yelp { background-position: -386px -386px; }
	#zazzle { background-position: -386px -512px; }
	#youtube { background-position: -512px 0; }
	#gmail { background-position: -512px -128px; }
	#carou23 { background-position: -512px -256px; }
	#carou24 { background-position: -512px -386px; }
	#carou25 { background-position: -512px -512px; }
</style>
@endsection

@section('nav')
	@parent
	<li class="to-right">
		{{ HTML::link("#", "List menu") }}
		<ul>
		  <li>{{ HTML::link("#", "Image&nbsp;List", array("title"=>"Change links to image carousel style", "id"=>"menuGraphics")) }}</li>
		  <li class="current">{{ HTML::link("#", "Text List", array("title"=>"Change links to text list style", "id"=>"menuText", "class" => "current")) }}</li>	
		</ul>
	</li>
</ul>
<ul class="reset">
	<li id="ctrls" class="controls transparent">
		<img src="/img/spacer.gif" width="5" height="1" alt=""/>
		{{ HTML::link("#", "", array("title"=>"Slow down carousel scroll rate", "id"=>"ctrls1")) }}
		{{ HTML::link("#", "", array("title"=>"Scroll backward", "id"=>"ctrls2")) }}
		{{ HTML::link("#", "", array("title"=>"Pause the carousel", "id"=>"ctrls3")) }}
		{{ HTML::link("#", "", array("title"=>"Restart the carousel", "id"=>"ctrls4")) }}
		{{ HTML::link("#", "", array("title"=>"Scroll forward", "id"=>"ctrls5")) }}
		{{ HTML::link("#", "", array("title"=>"Speed up carousel scroll rate", "id"=>"ctrls6")) }} 
		<img src="/img/spacer.gif" width="5" height="1" alt=""/><!-- without it last button drops down -->
	</li>
@endsection 
@section('top')
<div id="list">
	<div id="carousel">
		<ul id="t1">
			<li class="block1">
				{{ HTML::link("http://www.linkedin.com/profile/view?id=14123195", "Linkedin&#8663;", array("title"=>"Open my LinkedIn profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'linkedin', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show ? from LinkedIn on this page -->
			</li>
			<li class="block1">
				{{ HTML::link("https://github.com/jahdakine", "GitHub&#8663;", array("title"=>"Open my Github page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'github', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show ? from GitHub repo on this page -->
			</li>
			<li class="block1">
				{{ HTML::link("https://plus.google.com/u/0/114704033710627861845/posts", "Google+&#8663;", array("title"=>"Open my Google+ page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'google', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show 5 latest comments from my Google+ circle on this page -->
			</li>			
			<li class="block1">
				{{ HTML::link("http://stackoverflow.com/users/1997909/jahdakine", "Stackoverflow&#8663;", array("title"=>"Open my stackoverflow+ profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'stackoverflow', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show 5 latest question/answers from my stackoverflow on this page -->
			</li>
			<li class="block1">
				{{ HTML::link("www.yelp.com/", "Yelp&#8663;", array("title"=>"Open Yelp site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'yelp', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>
			<li class="block1">
				{{ HTML::link("https://www.icloud.com/", "iCloud&#8663;", array("title"=>"Open iCloud site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'icloud', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>
			<li class="block1">
				{{ HTML::link("https://vimeo.com/", "Vimeo&#8663;", array("title"=>"Open Vimeo site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'vimeo', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>		
		</ul><!-- //t1 -->
		<ul id="t2">
			<li class="block2">
				{{ HTML::link("http://www.youtube.com/user/jahdakine", "YouTube&#8663;", array("title"=>"Open my YouTube page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'youtube', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show 5 latest movies from my channel on this page -->
			</li>
			<li class="block2">
				{{ HTML::link("https://twitter.com/jahdakine", "Twitter&#8663;", array("title"=>"Open my Twitter page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'twitter', 'class' => 'feedBtn listImg', 'title' => 'Show 10 latest tweets on this page')) }}
			</li>
			<li class="block2">
				{{ HTML::link("http://www.flickr.com/photos/jahdakinebrah/", 'Flickr&#8663;', array("title"=>"Open my Flickr page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'flickr', 'class' => 'feedBtn listImg', 'title' => 'Show 20 latest images from my stream on this page')) }}
			</li>
			<li class="block2">
				{{ HTML::link("http://jahdakine.blogspot.com/", "Blogger&#8663;", array("title"=>"Open my Blogger page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'blogger', 'class' => 'feedBtn listImg', 'title' => 'Show latest 5 articles from my blog on this page')) }}
			</li>
			<li class="block2">
				{{ HTML::link("http://evernote.com/", "Evernote&#8663;", array("title"=>"Open Evernote site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'evernote', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}								
			</li>
			<li class="block2">
				{{ HTML::link("http://picasa.google.com/", "Picassa&#8663;", array("title"=>"Open Picassa site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'picassa', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>		
			<li class="block2">
				{{ HTML::link("http://www.fandango.com/", "Fandango&#8663;", array("title"=>"Open Fandango site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'fandango', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>						
		</ul><!-- // t2 -->
		<ul id="t3">	
			<li class="block3">
				{{ HTML::link("http://www.zazzle.com/jahdakine+gifts", "Zazzle&#8663;", array("title"=>"Open my Zazzle gift catalog in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'zazzle', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }} <!--Show latest 3 creations from my gift catalog on this page-->
			</li>
			<li class="block3">
				{{ HTML::link("http://myworld.ebay.com/specrun/", "eBay&#8663;", array("title"=>"Open my eBay profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'ebay', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}
			</li>
			<li class="block3">
				{{ HTML::link("http://grooveshark.com/#!/jahdakine", "Grooveshark&#8663;", array("title"=>"Open my GrooveShark profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'grooveshark', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}				
			</li>	
			<li class="block3">
				{{ HTML::link("http://www.meetup.com/HTML5-Denver-Users-Group/members/65732862/", "Meetup&#8663;", array("title"=>"Open my Meetup profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'meetup', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}				
			</li>		
			<li class="block3">
				{{ HTML::link("https://www.netflix.com/", "Netflix&#8663;", array("title"=>"Open Netflix site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'netflix', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>
			<li class="block3">
				{{ HTML::link("http://beta.skype.com/en/", "Skype&#8663;", array("title"=>"Open Skype site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'skype', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>	
			<li class="block3">
				{{ HTML::link("http://mail.google.com", "Gmail&#8663;", array("title"=>"Open Gmail site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'gmail', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>		
		</ul><!-- // t3 -->
	</div><!-- // carousel -->
</div><!-- // list -->
<div class="clear-fix"></div>
<hr class="separator"/>	
@endsection

@section('main')
	@section('aside')
	@endsection	
	<div id="landing" class="landAside">
		<article>
			Welcome. This is my online 
			<abbr title="Curriculum Vitae">CV</abbr>. 
			Select from any of the menu items above to explore more of my interests 
			and accomplishments, or contact me if you have a dream front-end web programming job 
			opening! This website is powered by jQuery, <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>, and 
			{{ HTML::link("http://laravel.com/docs", "Laravel&#8663;", array("title"=>"Offsite to Laravel Documentation in a new window", "target"=>"_blank", "class" => "offsite link-new-win")) }}, the 
			<abbr title="Model View Controller">MVC</abbr>
			framework that I'm gravitating to at the moment. It is responsive, accessible, and includes an ever popular scrolling style jQuery menu carousel 
			<em>(List menu|Image list)</em> that I'm thinking I'll call the social parade. It is basically my playground to spend time trying out new technologies and learning 
			about what works and what doesn't in the fine art and science of internet programming and design. Tabs and other user interface goodies can be found at
			{{ HTML::link("http://jqueryui.com/", "jQuery UI&#8663;", array("title"=>"Offsite to jQuery UI in a new window", "target"=>"_blank", "class" => "offsite link-new-win")) }}.
			Customizable tooltips:
			{{ HTML::link("http://craigsworks.com/projects/qtip2/", "qTips2&#8663;", array("title"=>"Offsite to qTips2 in a new window", "target"=>"_blank", "class" => "offsite link-new-win")) }}.
			Image carousel is available at 
			{{ HTML::link("http://caroufredsel.dev7studios.com/", "carouFred&#8663;", array("title"=>"Offsite to carouFred in a new window", "target"=>"_blank", "class" => "offsite link-new-win")) }}.
			<abbr title="Javascript Object Notation">jSON</abbr> request examples are documented within the  
			{{ HTML::link("http://api.jquery.com/jQuery.getJSON/", "jQuery API&#8663;", array("title"=>"Offsite to jQuery API in a new window", "target"=>"_blank", "class" => "offsite link-new-win")) }}.
			Mail reveal utility demonstrated on {{ HTML::link("contact", "Contact page", array("title"=>"Contact page")) }} courtesy of Google's 
			{{ HTML::link("http://www.google.com/recaptcha/mailhide/", "reCAPTCHA&#8663;", array("title"=>"Offsite to Mail Hide in a new window", "target"=>"_blank", "class" => "offsite link-new-win")) }}. 
			Slick icons from the folks at {{ HTML::link("http://www.iconarchive.com/", "IconArchive&#8663;", array("title"=>"Offsite to IconArchive in a new window", "target"=>"_blank", "class" => "offsite link-new-win")) }},
			a useful sprite generator that actually works can be found at 
			{{ HTML::link("http://www.floweringmind.com/sprite-creator/index.php", "Flowering Mind&#8663;", array("title"=>"Open sprite generator in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }},  
			and of some ultra nice styling is courtesy of 
			{{ HTML::link("http://twitter.github.com/bootstrap/customize", "Twitter's Bootstrap&#8663;", array("title"=>"Offsite to Bootstrap Customization in a new window", "target"=>"_blank", "class" => "offsite link-new-win")) }}.
			<p>
				This is as much a launching pad for me as it is a showcase of what I care about and can do. The default external hyperlink style opens sites in a new 
				window/tab because I keep this page open during my surfing day. This is quicker than using the right-click open option. If you prefer opening new sites 
				in the current window, use the <em>Commands|Toggle links</em> function.
			</p>
			<p id="carouselHelp" class="hide">
			 Included on selected items in the image list carousel are jSON feeds, via logo links. All external links available in 
			 the default text list <em>(List menu|Text list)</em> are accessible above the site logos. Note: I participate in some social networking sites more that others. 
			 Some hardly at all. The purpose of displaying some of them may be more of an excersize in learning their APIs than in participation.
			</p>
		</article>	
		<section class="notes">
			<h3 class="to-center">To do:</h3> 
			<ul>
				<li>Research remaining API calls</li>
				<li>Build out login area</li>
				<li>Facility for adding icons/sites</li>
				<li>Package (minify, optimize, modernizr)</li>
				<li>Arrive at energy independence!</li>
			</ul>		
			<!--  
			Preload images?
			Chrome BG wierdness?
			Add yslow and css scores
			security check
			accessibility check
			add carousel swipe for phones
			check on legacy and IE
			gzip, minify script
			-->
		</section><!-- // notes -->
	</div><!-- // landing -->
	<div id="contentFrame" class="content"></div><!-- // contentFrame -->

@endsection

@section('footer')	
@endsection

@section('scripts')
{{ HTML::script('js/vendor/jquery.carouFredSel-6.2.0-packed.js') }}
{{ HTML::script('js/vendor/jquery.center.min.js') }}	
<script>
	(function() {
		//cache DOM vars
		var list = $("#list"),
				list_img = $(".listImg"),
				carousel = $("#carousel"),
				carousel_li = $("#carousel>*>li"),
				block1 = $(".block1"),
				block2 = $(".block2"),
				block3 = $(".block3"),
				menu_text = $("#menuText"),
				menu_graphics = $("#menuGraphics"),
				c1 = $("#ctrls1"),
				c2 = $("#ctrls2"),
				c3 = $("#ctrls3"),
				c4 = $("#ctrls4"),
				c5 = $("#ctrls5"),
				c6 = $("#ctrls6"),
				ctrls = $("#ctrls");
				reset = $("#reset"),
				feed_btn = $(".feedBtn"),
				content_frame = $("#contentFrame"),
				land_aside = $(".landAside"),
				carousel_help = $("p#carouselHelp"),
				num2Scroll = 1,
				dir2Scroll = "left";
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
				carousel_help.fadeOut("fast");
			}
		});
		//nav menu clicks - graphics
		menu_graphics.on('click', function(e, num2Scroll, dir2Scroll) {
			e.preventDefault();
			if(list_img.css("display") !== "inline") {
				list_img.css("display","inline-table"); //displays hidden images embedded in links
				list.removeClass("list-text");
				list.addClass("list-carousel");
				carousel_li.unwrap();
				setCarousel(window.num2Scroll, window.dir2Scroll);
				ctrls.removeClass("transparent").center({vertical: false});
				menu_graphics.addClass("current").parent().addClass("current");
				menu_text.removeClass("current").parent().removeClass("current");
				carousel_help.fadeIn(2000);
			}
		});
		/*reset button click*/
		reset.on('click', function(e) {
			e.preventDefault();
			content_frame.fadeOut("slow", function() {
				content_frame.empty();
				land_aside.fadeIn("slow");
			});
			reset.addClass("current");
			reset.parent().addClass("current"); //sets the parent li - otherwise hover color bleeds thru padding
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
					html = '<h2 align="center">Latest ' +id.substr(0,1).toUpperCase()+id.substr(1)+ ' Updates</h2><ul style="list-style:none">',
					http = '',
					obj = '',
					date = '',
					show = '',
					tmp = '',
					success = false;
			show = "content_frame.css('display','inline').removeClass('image-matrix')";
			switch (id) {
				case ('blogger'):
					http = 'https://www.googleapis.com/blogger/v3/blogs/2575251403540723939/posts?key=AIzaSyC4Zhv-nd_98_9Vn8Ad3U6TjY99Pd2YzOQ';
					obj = 'data.items';
					tmp = "'<li><time datetime=\"' + item.updated + '\">' + item.updated.substr(0,10) + '</time>: <a href=\"' + item.url + '\" target=\"_blank\">' + item.title + '</a></li>'";
	        limit = 5;
	        break;
	      case ('twitter'):
					http = 'http://search.twitter.com/search.json?q=jahdakine&callback=?';
					obj = 'data.results';
					tmp = "'<li><img src=\"' +item.profile_image_url+ '\" height=\"24\" width=\"24\" alt=\"profile icon\"/>&nbsp;<time datetime=\"' +item.created_at.split(' ').slice(0, 4).join(' ')+ '\">' +item.created_at.split(' ').slice(0, 4).join(' ')+ '</time>:&nbsp;<a href=\"http://twitter.com/jahdakine/status/' +item.id_str+ '\" target=\"_blank\">' +item.text+ '</a></li>'";
	        limit = 10;
	        break;
	      case ('flickr'):
					http = 'http://api.flickr.com/services/feeds/photos_public.gne?id=23019891@N00&lang=en-us&format=json&jsoncallback=?';
					obj = 'data.items';
					tmp = "'<a href=\"' + item.link + '\" target=\"_blank\" class=\"flickr-img\" title=\"Open Flickr page titled &#34;' + item.title + '&#34; in a new window/tab\"><img src=\"' + item.media.m + '\" /></a>'";
					show = "content_frame.css('display','inline-block').addClass('image-matrix')";
					limit = 20;
	        break;
	//    case ('meetup'): //venue=1139097 member=65732862 group=1769691 group_urlname=HTML5-Denver-Users-Group
	//			http = 'https://api.meetup.com/2/checkins?group_id=1769691&key=4c20142a4141d657e707171794141c&_=1359581403601&event_id=93211712&order=time&desc=True&member_id=65732862&offset=0&callback=?&format=json&page=20&sign=true';
	//			obj = 'results';
	//			tmp = "<li><li>";
	//			limit = 3;
	//      break;
	//    case ('linkedin'):
	//      break;
	//    case ('grooveshark'):
	//      break;
	//    case ('github'):
	//			http = 'https://api.github.com/?/repos/jahdakine/portfolio&callback=?';//!!!nope
	//			obj = 'data.data';
	//			limit = 5;
	//			break;
	//		case ('youtube'):
	//			break;
	    }
	    //put html into content frame
	    function appendDOM(html) {
				//console.log(html);
				if(reset.hasClass("current")) {
					land_aside.fadeOut("slow");
					reset.removeClass("current");
				} else {
					content_frame.fadeOut("slow");
				}
				content_frame.fadeIn("slow", function() {
					content_frame.html(html);
					eval(show);
				});
	    }
	    //make xhr request
			function getFeed(http, obj, tmp, html, id) {
				//console.log(http);
				//!!!cache? Would need to use local storage or DB or jquery-json.2.4.0
				return $.getJSON(http, function(data) {
					success = true;
					//console.log(data);
					$.each(eval(obj), function(i,item) {
							console.log(item);
							html += eval(tmp);
							//console.log(html);
							if(i === limit) { return false; }
						});
					if(id !== 'flickr' && html.search("<li>") === -1) {
						html+='<li><img src="/img/warning-icon.png" height="16" width="16" alt=""/>&nbsp;Sorry, nothing today!</li>';
					}
					html += '</ul>';
					appendDOM(html);
				});
			}
			getFeed(http, obj, tmp, html, id);
			//ERROR: Can be tested by commenting appendDOM(html) line in getFeed
			setTimeout(function() {
				if (!success) {
					html = '<h2 align="center">Error!</h2><blockquote>There has been an error requesting ' +id.substr(0,1).toUpperCase()+id.substr(1)+ ' data</blockquote>';
					appendDOM(html);
				}
			}, 2000);
		});
	})();
</script>
@endsection
