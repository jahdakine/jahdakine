@layout('layout')

@section('title') Home @endsection

@section('header')		
	{{ HTML::style('css/index.css') }}
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
@endsection 
@section('top')
<div id="list" class="list">
	<div id="carousel">
		<ul class="list-text">
			<li class="block1">
				{{ HTML::link("http://www.linkedin.com/profile/view?id=14123195", "Linkedin&#8663;", array("title"=>"Open my LinkedIn profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'linkedin', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show last 3 recommendations from LinkedIn on this page -->
				<!-- 
				<script>
					recosHTML = '';
				  function onLinkedInLoad() {
				    IN.Event.on(IN, "auth", onLinkedInAuth);
				  }
					function onLinkedInAuth() {
						//console.log("authorized");
						recosHTML = authSuccess();
				  }
					function authSuccess() {
						IN.API.Raw("/people/url=http%3A%2F%2Fwww.linkedin.com%2Fin%2Fjahdakine/recommendations-received?scope=r_fullprofile").result(function(result) {
							for(var key in result.values) {
								var reco = result.values[key];
								recosHTML += "<p><i><b>" + reco.recommender.firstName + " " + reco.recommender.lastName + "</b> says:</i><br>" + reco.recommendationText + "</p>";
							}
						});
						return recosHTML;
					}
				</script>
				 -->			
			</li>
			<li class="block1">
				{{ HTML::link("https://github.com/jahdakine", "GitHub&#8663;", array("title"=>"Open my Github page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'github', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show ? from GitHub repo on this page -->
			</li>
			<li class="block1">
				{{ HTML::link("https://plus.google.com/u/0/114704033710627861845/posts", "Google+&#8663;", array("title"=>"Open my Google+ page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'google', 'class' => 'feedBtn listImg', 'title' => 'Show latest posts from Google+ on this page')) }}<!-- Show 5 latest comments from my Google+ circle on this page -->
			</li>			
			<li class="block1">
				{{ HTML::link("http://stackoverflow.com/users/1997909/jahdakine", "Stackoverflow&#8663;", array("title"=>"Open my stackoverflow+ profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'stackoverflow', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show 5 latest question/answers from my stackoverflow on this page -->
			</li>
			<li class="block1">
				{{ HTML::link("www.yelp.com/", "Yelp&#8663;", array("title"=>"Open Yelp site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'yelp', 'class' => 'feedBtn listImg', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
			</li>
			<li class="block1">
				{{ HTML::link("https://www.icloud.com/", "iCloud&#8663;", array("title"=>"Open iCloud site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'icloud', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>
			<li class="block1">
				{{ HTML::link("https://vimeo.com/", "Vimeo&#8663;", array("title"=>"Open Vimeo site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'vimeo', 'class' => 'feedBtn listImg', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
			</li>		
			<li class="block2">
				{{ HTML::link("http://www.youtube.com/user/jahdakine", "YouTube&#8663;", array("title"=>"Open my YouTube page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'youtube', 'class' => 'feedBtn listImg', 'title' => 'Show latest movies from my channel on this page')) }}
			</li>
			<li class="block2">
				{{ HTML::link("https://twitter.com/jahdakine", "Twitter&#8663;", array("title"=>"Open my Twitter page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'twitter', 'class' => 'feedBtn listImg', 'title' => 'Show latest tweets on this page')) }}
			</li>
			<li class="block2">
				{{ HTML::link("http://www.flickr.com/photos/jahdakinebrah/", 'Flickr&#8663;', array("title"=>"Open my Flickr page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'flickr', 'class' => 'feedBtn listImg', 'title' => 'Show latest images from my stream on this page')) }}
			</li>
			<li class="block2">
				{{ HTML::link("http://jahdakine.blogspot.com/", "Blogger&#8663;", array("title"=>"Open my Blogger page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'blogger', 'class' => 'feedBtn listImg', 'title' => 'Show latest articles from my blog on this page')) }}
			</li>
			<li class="block2">
				{{ HTML::link("http://evernote.com/", "Evernote&#8663;", array("title"=>"Open Evernote site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'evernote', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}								
			</li>
			<li class="block2">
				{{ HTML::link("http://picasa.google.com/", "Picassa&#8663;", array("title"=>"Open Picassa site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'picassa', 'class' => 'feedBtn listImg', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
			</li>		
			<li class="block2">
				{{ HTML::link("http://www.fandango.com/", "Fandango&#8663;", array("title"=>"Open Fandango site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'fandango', 'class' => 'feedBtn listImg', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
			</li>							
			<li class="block3">
				{{ HTML::link("http://www.zazzle.com/jahdakine+gifts", "Zazzle&#8663;", array("title"=>"Open my Zazzle gift catalog in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				{{ HTML::link('#', '', array('id' => 'zazzle', 'class' => 'feedBtn listImg', 'title' => 'Show latest creations from my Zazzle stores on this page')) }} 
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
				{{ HTML::link('#', '', array('id' => 'netflix', 'class' => 'feedBtn listImg', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
			</li>
			<li class="block3">
				{{ HTML::link("http://beta.skype.com/en/", "Skype&#8663;", array("title"=>"Open Skype site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }}
				<a href='callto:jahdakine?call' title='Launch a call to my Skype address' target="_blank" id="skype" class="listImg"></a>				
			</li>	
			<li class="block3">
				{{ HTML::link("#", "Gnerdl&#8663;", array("title"=>"Open Gnerdl site soon in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win", "return"=>"false")) }}
				{{ HTML::link('#', '', array('id' => 'gnerdl', 'class' => 'feedBtn listImg', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
			</li>		
		</ul><!-- // t3 -->
	</div><!-- // carousel -->
</div><!-- // list -->
<div class="clear-fix"></div>
	@section('controls')
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
	</ul>
	@endsection
</div><!-- end  -->
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
			<em>(List menu|Image list)</em> that I'm thinking I'll call my social parade. It is basically my playground to spend time trying out new technologies and learning 
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
				in the current window, use the <em>Commands|Toggle links</em> function and your setting will be saved for future visits thanks to Local Storage.
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
			security check
			accessibility check
			check on legacy and IE
			gzip, minify scripts
			tooltips in feeds?
			back to top floater on portfolio
			-->
		</section><!-- // notes -->
	</div><!-- // landing -->
	<div id="contentFrame" class="content"></div><!-- // contentFrame -->
@endsection

@section('footer')	
@endsection

@section('scripts')
	<!-- 	
	<script src="http://platform.linkedin.com/in.js" type="text/javascript">
		api_key: wjykc0bcemsm
		scope: r_fullprofile
		authorize: true
		onLoad: onLinkedInLoad
	</script>	
 	-->	
 {{ HTML::script('js/index.funcs.js') }}
@endsection
