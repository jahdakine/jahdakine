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
				{{ HTML::link("https://twitter.com/jahdakine", "Twitter&#8663;", array("title"=>"Open my Twitter page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show latest tweets on this page', array('id' => 'twitter', 'class' => 'feedBtn listImg access-link', 'title' => 'Show latest tweets on this page')) }}
			</li>
			<li class="block1">
				{{ HTML::link("http://www.flickr.com/photos/jahdakinebrah/", 'Flickr&#8663;', array("title"=>"Open my Flickr page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show latest images from my stream on this page', array('id' => 'flickr', 'class' => 'feedBtn listImg access-link', 'title' => 'Show latest images from my stream on this page')) }}
			</li>
			<li class="block1">
				{{ HTML::link("http://jahdakine.blogspot.com/", "Blogger&#8663;", array("title"=>"Open my Blogger page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show latest articles from my blog on this page', array('id' => 'blogger', 'class' => 'feedBtn listImg access-link', 'title' => 'Show latest articles from my blog on this page')) }}
			</li>			
			<li class="block1">
				{{ HTML::link("http://www.youtube.com/user/jahdakine", "YouTube&#8663;", array("title"=>"Open my YouTube page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show latest movies from my YouTube channel on this page', array('id' => 'youtube', 'class' => 'feedBtn listImg access-link', 'title' => 'Show latest movies from my YouTube channel on this page')) }}
			</li>			
			<li class="block1">
				{{ HTML::link("https://plus.google.com/u/0/114704033710627861845/posts", "Google+&#8663;", array("title"=>"Open my Google+ page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show latest posts from Google+ on this page', array('id' => 'google', 'class' => 'feedBtn listImg access-link', 'title' => 'Show latest posts from Google+ on this page')) }}<!-- Show 5 latest comments from my Google+ circle on this page -->
			</li>	
			<li class="block1">
				{{ HTML::link("http://www.zazzle.com/jahdakine+gifts", "Zazzle&#8663;", array("title"=>"Open my Zazzle gift catalog in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show latest creations from my Zazzle stores on this page', array('id' => 'zazzle', 'class' => 'feedBtn listImg access-link', 'title' => 'Show latest creations from my Zazzle stores on this page')) }} 
			</li>	
			<li class="block1">
				{{ HTML::link("http://beta.skype.com/en/", "Skype&#8663;", array("title"=>"Open Skype site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				<a href='callto:jahdakine?call' title='Launch a call to my Skype address' target="_blank" id="skype" class="listImg access-link">Launch a call to my Skype address</a>				
			</li>								
			<li class="block2">
				{{ HTML::link("http://stackoverflow.com/users/1997909/jahdakine", "Stackoverflow&#8663;", array("title"=>"Open my stackoverflow+ profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show 5 latest question/answers from my Stackoverflow on this page - coming soon', array('id' => 'stackoverflow', 'class' => 'feedBtn listImg access-link', 'title' => 'Coming soon')) }}
			</li>
			<li class="block2">
				{{ HTML::link("www.yelp.com/", "Yelp&#8663;", array("title"=>"Open Yelp site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show my 5 latest comments from Yelp on this page - coming soon', array('id' => 'yelp', 'class' => 'feedBtn listImg access-link', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
			</li>
			<li class="block2">
				{{ HTML::link("https://vimeo.com/", "Vimeo&#8663;", array("title"=>"Open Vimeo site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show latest movies from my Vimeo channel on this page - coming soon', array('id' => 'vimeo', 'class' => 'feedBtn listImg access-link', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
			</li>	
			<li class="block2">
				{{ HTML::link("http://www.linkedin.com/profile/view?id=14123195", "Linkedin&#8663;", array("title"=>"Open my LinkedIn profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show last 3 recommendations from LinkedIn on this page - coming soon', array('id' => 'linkedin', 'class' => 'feedBtn listImg access-link', 'title' => 'Coming soon')) }}
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
			<li class="block2">
				{{ HTML::link("https://github.com/jahdakine", "GitHub&#8663;", array("title"=>"Open my Github page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show my latest repository activity from GitHub repo on this page - coming soon', array('id' => 'github', 'class' => 'feedBtn listImg access-link', 'title' => 'Coming soon')) }}
			</li>					
			<li class="block2">
				{{ HTML::link("http://picasa.google.com/", "Picassa&#8663;", array("title"=>"Open Picassa site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show my latest album from Picassa on this page - coming soon', array('id' => 'picassa', 'class' => 'feedBtn listImg access-link', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
			</li>		
			<li class="block2">
				{{ HTML::link("http://www.fandango.com/", "Fandango&#8663;", array("title"=>"Open Fandango site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show my lastest movies seen at Fandango on this page - coming soon', array('id' => 'fandango', 'class' => 'feedBtn listImg access-link', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
			</li>		
				<li class="block3">
				{{ HTML::link("https://www.netflix.com/", "Netflix&#8663;", array("title"=>"Open Netflix site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show my latest movie recommendations from Netflix on this page - coming soon', array('id' => 'netflix', 'class' => 'feedBtn listImg access-link', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
			</li>		
			<li class="block3">
				{{ HTML::link("http://myworld.ebay.com/specrun/", "eBay&#8663;", array("title"=>"Open my eBay profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show my latest feedback from Ebay on this page', array('id' => 'ebay', 'class' => 'feedBtn listImg access-link', 'title' => 'Coming soon')) }}
			</li>
			<li class="block3">
				{{ HTML::link("http://grooveshark.com/#!/jahdakine", "Grooveshark&#8663;", array("title"=>"Open my GrooveShark profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', "Show the last 5 songs I've played at Groveshark on this page - coming soon", array('id' => 'grooveshark', 'class' => 'feedBtn listImg access-link', 'title' => 'Coming soon')) }}				
			</li>	
			<li class="block3">
				{{ HTML::link("http://www.meetup.com/HTML5-Denver-Users-Group/members/65732862/", "Meetup&#8663;", array("title"=>"Open my Meetup profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'Show my recent attendance at Meetup on this page - coming soon', array('id' => 'meetup', 'class' => 'feedBtn listImg access-link', 'title' => 'Coming soon')) }}				
			</li>		

			<li class="block3">
				{{ HTML::link("http://www.gnerdl.com", "Gnerdl&#8663;", array("title"=>"Open Gnerdl site soon in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href", "return"=>"false")) }}
				{{ HTML::link('#', 'Futuristic site - placeholder only', array('id' => 'gnerdl', 'class' => 'feedBtn listImg access-link', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
			</li>	
			<li class="block3">
				{{ HTML::link("https://www.icloud.com/", "iCloud&#8663;", array("title"=>"Open iCloud site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'You must be logged in to access private account', array('id' => 'icloud', 'class' => 'feedBtn listImg access-link', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>				
			<li class="block3">
				{{ HTML::link("http://evernote.com/", "Evernote&#8663;", array("title"=>"Open Evernote site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}
				{{ HTML::link('#', 'You must be logged in to access private account', array('id' => 'evernote', 'class' => 'feedBtn listImg access-link', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}								
			</li>			
		</ul><!-- // t3 -->
	</div><!-- // carousel -->
</div><!-- // list -->
<div class="clear-fix"></div>
	@section('controls')
	<ul class="reset">
		<li id="ctrls" class="controls transparent bg-dark">
			<img src="/img/spacer.gif" width="3" height="1" alt=""/>
			{{ HTML::link("#", "Slow down carousel scroll rate", array("title"=>"Slow down carousel scroll rate", "id"=>"ctrls1", "class"=>"access-link white")) }}
			{{ HTML::link("#", "Scroll backward", array("title"=>"Scroll backward", "id"=>"ctrls2", "class"=>"access-link white")) }}
			{{ HTML::link("#", "Pause the carousel", array("title"=>"Pause the carousel", "id"=>"ctrls3", "class"=>"access-link white")) }}
			{{ HTML::link("#", "Restart the carousel", array("title"=>"Restart the carousel", "id"=>"ctrls4", "class"=>"access-link white")) }}
			{{ HTML::link("#", "Scroll forward", array("title"=>"Scroll forward", "id"=>"ctrls5", "class"=>"access-link white")) }}
			{{ HTML::link("#", "Speed up carousel scroll rate", array("title"=>"Speed up carousel scroll rate", "id"=>"ctrls6", "class"=>"access-link white")) }} 
			<img src="/img/spacer.gif" width="1" height="1" alt=""/> 
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
			<h4 class="reset">Welcome</h4> 
			This is my online <abbr title="Curriculum Vitae">CV</abbr>.
			Select from any of the menu items above to explore more of my interests 
			and accomplishments, or {{ HTML::link("home/contact", "contact", array("title"=>"Get in touch", "class"=>"href")) }} me if you have a dream front-end web programming job 
			opening! This website is powered by jQuery, <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>, and 
			{{ HTML::link("http://laravel.com/docs", "Laravel&#8663;", array("title"=>"Offsite to Laravel Documentation in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}, the 
			<abbr title="Model View Controller">MVC</abbr>
			framework that I'm gravitating to at the moment. It is responsive, accessible, and includes an ever popular scrolling style jQuery menu carousel 
			<em>(List menu|Image list)</em> that I'm thinking I'll call my social parade. It is basically my playground to spend time trying out new technologies and learning 
			about what works and what doesn't in the fine art and science of internet programming and design. Tabs and other user interface goodies can be found at
			{{ HTML::link("http://jqueryui.com/", "jQuery UI&#8663;", array("title"=>"Offsite to jQuery UI in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}.
			Customizable tooltips:
			{{ HTML::link("http://craigsworks.com/projects/qtip2/", "qTips2&#8663;", array("title"=>"Offsite to qTips2 in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}.
			Image carousel is available at 
			{{ HTML::link("http://caroufredsel.dev7studios.com/", "carouFred&#8663;", array("title"=>"Offsite to carouFred in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}.
			<abbr title="Javascript Object Notation">jSON</abbr> request examples are documented within the  
			{{ HTML::link("http://api.jquery.com/jQuery.getJSON/", "jQuery API&#8663;", array("title"=>"Offsite to jQuery API in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}.
			Mail reveal utility demonstrated on {{ HTML::link("contact", "Contact page", array("title"=>"Contact page", "class"=>"href")) }} courtesy of Google's 
			{{ HTML::link("http://www.google.com/recaptcha/mailhide/", "reCAPTCHA&#8663;", array("title"=>"Offsite to Mail Hide in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}. 
			Slick icons from the folks at {{ HTML::link("http://www.iconarchive.com/", "IconArchive&#8663;", array("title"=>"Offsite to IconArchive in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }},
			a useful sprite generator that actually works can be found at 
			{{ HTML::link("http://www.floweringmind.com/sprite-creator/index.php", "Flowering Mind&#8663;", array("title"=>"Open sprite generator in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }},  
			and of some ultra nice styling is courtesy of 
			{{ HTML::link("http://twitter.github.com/bootstrap/customize", "Twitter's Bootstrap&#8663;", array("title"=>"Offsite to Bootstrap Customization in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}.
			<p>
				This is as much a launching pad for me as it is a showcase of what I care about and can do. The default external hyperlink style opens sites in a new 
				window/tab because I keep this page open during my surfing day. This is quicker than using the right-click open option. If you prefer opening new sites 
				in the current window, use the <em>Commands|Toggle links</em> function and your setting will be saved for future visits thanks to Local Storage. I originally designed 
				this site with lower contrast, color coordinated links. If you don't mind that, try the <em>Commands|Toggle color</em> function to get a nicer look 
				(this does not pass Section 503 contrast standards). While you're poking around, try out my interactive  
				{{ HTML::link("404", "404 (page not found)", array("title"=>"Oops!", "class"=>"href")) }} for fun.
			</p>
			<p id="carouselHelp" class="hide">
			 Included on selected items in the image list carousel are jSON feeds, via logo links. All external links available in 
			 the default text list <em>(List menu|Text list)</em> are accessible above the site logos. Note: I participate in some social networking sites more that others. 
			 Some hardly at all. The purpose of displaying some of them may be more of an excersize in learning their APIs than in participation.
			</p>
		</article>	
		<section class="notes">
			<h4 class="to-center">To do:</h4> 
			<ul>
				<li>Research remaining API calls</li>
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
		api_key: 
		scope: r_fullprofile
		authorize: true
		onLoad: onLinkedInLoad
	</script>	
 	-->	
 {{ HTML::script('js/index.funcs.js') }}
@endsection
