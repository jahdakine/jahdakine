@layout('layout')

@section('title') Home @endsection

@section('header')		
	{{ HTML::style('css/index.css') }}
@endsection

@section('nav')
	@parent
@endsection 
@section('top')
	<div id="list" class="list">
		<div id="carousel">
			<ul class="list-text">
				<li class="block1">
					{{ HTML::link("https://twitter.com/jahdakine", "Twitter&#8663;", array("title"=>"Open my Twitter page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest tweets', array('id' => 'twitter', 'class' => 'hidden hidden feedBtn listImg access-link', 'title' => 'Show latest tweets on this page')) }}
				</li>
				<li class="block1">
					{{ HTML::link("http://www.flickr.com/photos/jahdakinebrah/", 'Flickr&#8663;', array("title"=>"Open my Flickr page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest Flickr images', array('id' => 'flickr', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Show latest images from my stream on this page')) }}
				</li>
				<li class="block1">
					{{ HTML::link("http://jahdakine.blogspot.com/", "Blogger&#8663;", array("title"=>"Open my Blogger page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest blog entries', array('id' => 'blogger', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Show latest articles from my blog on this page')) }}
				</li>			
				<li class="block1">
					{{ HTML::link("http://www.youtube.com/user/jahdakine", "YouTube&#8663;", array("title"=>"Open my YouTube page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest YouTube Channel movies', array('id' => 'youtube', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Show latest movies from my YouTube channel on this page')) }}
				</li>			
				<li class="block1">
					{{ HTML::link("https://plus.google.com/u/0/114704033710627861845/posts", "Google+&#8663;", array("title"=>"Open my Google+ page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest Google+ posts', array('id' => 'google', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Show latest posts from Google+ on this page')) }}<!-- Show 5 latest comments from my Google+ circle on this page -->
				</li>	
				<li class="block1">
					{{ HTML::link("http://www.zazzle.com/jahdakine+gifts", "Zazzle&#8663;", array("title"=>"Open my Zazzle gift catalog in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest Zazzle creations', array('id' => 'zazzle', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Show latest creations from my Zazzle stores on this page')) }} 
				</li>	
				<li class="block1">
					{{ HTML::link("http://beta.skype.com/en/", "Skype&#8663;", array("title"=>"Open Skype site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					<a href='callto:jahdakine?call' title='Skype me' target="_blank" id="skype" class="hidden listImg access-link">Launch a call to my Skype address</a>				
				</li>								
				<li class="block2">
					{{ HTML::link("http://stackoverflow.com/users/1997909/jahdakine", "Stackoverflow&#8663;", array("title"=>"Open my stackoverflow+ profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest Stackoverflow activity - coming soon', array('id' => 'stackoverflow', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Coming soon')) }}
				</li>
				<li class="block2">
					{{ HTML::link("www.yelp.com/", "Yelp&#8663;", array("title"=>"Open Yelp site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest Yelp comments - coming soon', array('id' => 'yelp', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
				</li>
				<li class="block2">
					{{ HTML::link("https://vimeo.com/", "Vimeo&#8663;", array("title"=>"Open Vimeo site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest Vimeo Channel movies - coming soon', array('id' => 'vimeo', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
				</li>	
				<li class="block2">
					{{ HTML::link("http://www.linkedin.com/profile/view?id=14123195", "Linkedin&#8663;", array("title"=>"Open my LinkedIn profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest Linkedin recommendations - coming soon', array('id' => 'linkedin', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Coming soon')) }}
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
					{{ HTML::link("https://github.com/jahdakine", "GitHub&#8663;", array("title"=>"Open my Github page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest GitHub repository activity - coming soon', array('id' => 'github', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Coming soon')) }}
				</li>					
				<li class="block2">
					{{ HTML::link("http://picasa.google.com/", "Picassa&#8663;", array("title"=>"Open Picassa site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest Picassa album - coming soon', array('id' => 'picassa', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
				</li>		
				<li class="block2">
					{{ HTML::link("http://www.fandango.com/", "Fandango&#8663;", array("title"=>"Open Fandango site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Lastest Fandango movie comments - coming soon', array('id' => 'fandango', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
				</li>		
					<li class="block3">
					{{ HTML::link("https://www.netflix.com/", "Netflix&#8663;", array("title"=>"Open Netflix site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest Netflix  movie recommendations - coming soon', array('id' => 'netflix', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Coming soon', "onclick" => "return false;")) }}				
				</li>		
				<li class="block3">
					{{ HTML::link("http://myworld.ebay.com/specrun/", "eBay&#8663;", array("title"=>"Open my eBay profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Latest Ebay feedback -coming soon', array('id' => 'ebay', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Coming soon')) }}
				</li>
				<li class="block3">
					{{ HTML::link("http://grooveshark.com/#!/jahdakine", "Grooveshark&#8663;", array("title"=>"Open my GrooveShark profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', "Latest Groveshark activity - coming soon", array('id' => 'grooveshark', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Coming soon')) }}				
				</li>	
				<li class="block3">
					{{ HTML::link("http://www.meetup.com/HTML5-Denver-Users-Group/members/65732862/", "Meetup&#8663;", array("title"=>"Open my Meetup profile page in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Last Meetup attendance  - coming soon', array('id' => 'meetup', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Coming soon')) }}				
				</li>		

				<li class="block3">
					{{ HTML::link("http://www.gnerdl.com", "Gnerdl&#8663;", array("title"=>"Open Gnerdl site soon in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Futuristic site - placeholder only', array('id' => 'gnerdl', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'Coming soon')) }}				
				</li>	
				<li class="block3">
					{{ HTML::link("https://www.icloud.com/", "iCloud&#8663;", array("title"=>"Open iCloud site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Private iCloud link', array('id' => 'icloud', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
				</li>				
				<li class="block3">
					{{ HTML::link("http://evernote.com/", "Evernote&#8663;", array("title"=>"Open Evernote site in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }}<br/>
					{{ HTML::link('#', 'Private Evernote link', array('id' => 'evernote', 'class' => 'hidden feedBtn listImg access-link', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}								
				</li>			
			</ul><!-- // t3 -->
		</div><!-- // carousel -->
	</div><!-- // list -->
	@section('controls')
	<div class="control-bg">
	<ul class="reset">
		<li id="ctrls" class="controls transparent bg-dark">
			<img src="/img/spacer.gif" width="3" height="1" alt=""/>
			{{ HTML::link("#", "Slower", array("title"=>"Slow down carousel scroll rate", "id"=>"ctrls1", "class"=>"access-link white")) }}
			{{ HTML::link("#", "Backward", array("title"=>"Scroll backward", "id"=>"ctrls2", "class"=>"access-link white")) }}
			{{ HTML::link("#", "Pause", array("title"=>"Pause the carousel", "id"=>"ctrls3", "class"=>"access-link white")) }}
			{{ HTML::link("#", "Restart", array("title"=>"Restart the carousel", "id"=>"ctrls4", "class"=>"access-link white")) }}
			{{ HTML::link("#", "Forward", array("title"=>"Scroll forward", "id"=>"ctrls5", "class"=>"access-link white")) }}
			{{ HTML::link("#", "Faster", array("title"=>"Speed up carousel scroll rate", "id"=>"ctrls6", "class"=>"access-link white")) }} 
			<img src="/img/spacer.gif" width="2" height="1" alt=""/> 
		</li>
	</ul>
	</div><!-- control-bg -->
	@endsection<!-- controls -->
@endsection<!-- top -->

@section('main')
	@section('aside')
		@section('nojs')
			<li><span id="nojs" class="nojs" title="Highlighted functionality is dependant on Javascript">Requires Javascript!</span></li>
		@endsection
		@section('index')
			<li><a href="#" id="menuGraphics" class="hide href small to-bottom menuGraphics" title="Change format to rotating image links"><i class="icon-picture"></i>&nbsp;Image list</a>
			<li><a href="#" id="menuText" class="hide href small to-bottom menuText" title="Change format to text links"><i class="icon-list-alt"></i>&nbsp;Text list</a>
		@endsection<!-- index -->
	@endsection<!-- aside -->
	<div id="landing" class="landAside">
		<article>
			<h4>Welcome</h4> 
			This is my online <abbr title="Curriculum Vitae">CV</abbr>.
			Select from any of the menu items above to explore more of my interests 
			and accomplishments, or {{ HTML::link("home/contact", "contact", array("class"=>"href")) }} me if you have a dream front-end web programming job 
			opening! This website is powered by jQuery, <abbr title="PHP: Hypertext Preprocessor">PHP</abbr>, and 
			{{ HTML::link("http://laravel.com/docs", "Laravel&#8663;", array("title"=>"Offsite to Laravel Documentation in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}, the 
			<abbr title="Model View Controller">MVC</abbr>
			framework that I'm gravitating to at the moment. It is responsive, accessible, and includes an ever popular <span class="nojs" title="Requires Javascript!">scrolling style jQuery menu carousel
			<em>(Commands|Image format)</em></span> that I'm thinking I'll call my social parade. It is basically my playground to spend time trying out new technologies and learning 
			about what works and what doesn't in the fine art and science of internet programming and design. <span class="nojs" title="Requires Javascript!"><em>Tabs</em></span> and other user interface goodies can be found at
			{{ HTML::link("http://jqueryui.com/", "jQuery UI&#8663;", array("title"=>"Offsite to jQuery UI in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}.
			<span class="nojs" title="Requires Javascript!"><em>Customizable tooltips</em></span>:
			{{ HTML::link("http://craigsworks.com/projects/qtip2/", "qTips2&#8663;", array("title"=>"Offsite to qTips2 in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}.
			<span class="nojs" title="Requires Javascript!"><em>Image carousel</em></span> is available at 
			{{ HTML::link("http://caroufredsel.dev7studios.com/", "carouFred&#8663;", array("title"=>"Offsite to carouFred in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}.
			<span class="nojs" title="Requires Javascript!"><abbr title="Javascript Object Notation">jSON</abbr> request examples</span> are documented within the  
			{{ HTML::link("http://api.jquery.com/jQuery.getJSON/", "jQuery API&#8663;", array("title"=>"Offsite to jQuery API in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}.
			Mail reveal utility demonstrated on {{ HTML::link("contact", "Contact page", array("class"=>"href")) }} courtesy of Google's 
			{{ HTML::link("http://www.google.com/recaptcha/mailhide/", "reCAPTCHA&#8663;", array("title"=>"Offsite to Mail Hide in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}. 
			Slick icons from the folks at {{ HTML::link("http://www.iconarchive.com/", "IconArchive&#8663;", array("title"=>"Offsite to IconArchive in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }},
			and {{ HTML::link("http://www.glyphicons.com/", "Glyphicons&#8663;", array("title"=>"Offsite to Glyphicons in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}.
			A useful sprite generator that actually works can be found at 
			{{ HTML::link("http://www.floweringmind.com/sprite-creator/index.php", "Flowering Mind&#8663;", array("title"=>"Open sprite generator in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }},  
			and of some ultra nice styling is courtesy of 
			{{ HTML::link("http://twitter.github.com/bootstrap/customize", "Twitter's Bootstrap&#8663;", array("title"=>"Offsite to Bootstrap Customization in a new window", "target"=>"_blank", "class" => "offsite link-new-win href")) }}.
			<p>
				This is as much a launching pad for me as it is a showcase of what I care about and can do. The default external hyperlink style opens sites in a new 
				window/tab because I keep this page open during my surfing day. This is quicker than using the right-click open option. If you prefer opening new sites 
				in the current window, use the <span class="nojs" title="Requires Javascript!"><em>Commands|Linking</em> function</span> and your setting will be saved for future visits thanks to Local Storage. I originally designed 
				this site with lower contrast, color coordinated links. If you don't mind that, try the <span class="nojs" title="Requires Javascript!"><em>Commands|Contrast</em> function</span> to get a nicer look 
				(this does not pass Section 503 contrast standards). While you're poking around, check out my interactive  
				{{ HTML::link("404", "404 (page not found)", array("title"=>"Oops!", "class"=>"href")) }} for fun (audio event - 
				<img src="/img/warning-icon.png" height="16" width="16" alt="" class=" to-middle"/>volume alert) or jump over to the 
				{{ HTML::link("home/technology", "Technology page", array("class"=>"href")) }} to see more of what makes
				this site tick.
			</p>
			<p id="carouselHelp" class="hide">
			 Included on selected items in the image list carousel are jSON feeds, via logo links. All external links available in 
			 the default text list <em>(Commands|Text format)</em> are accessible above the site logos. Note: I participate in some social networking sites more that others. 
			 Some hardly at all. The purpose of displaying some of them may be more of an excersize in learning their APIs than in participation.
			</p>
		</article>	
		<section class="notes">
			<h4 class="to-center note-font" id="todo">To do:</h4> 
			<ul id="note1" class="show">
				<li>Research remaining API calls</li>
				<li>Facility for adding icons/sites</li>
				<li class="strike">503 accessibility check</li>
				<li>Package (minify, optimize, modernizr)</li>
				<li class="strike">Back to Top floater</li>
				<li>Arrive at energy independence!</li>
			</ul>	
			<ul id="note2" class="hide">
				<li class="strike">Create link contrast switcher</li>
				<li class="strike">Build out login area</li>
				<li class="strike">Manage social sites list in dB</li>	
				<li class="strike">Create external link switcher</li>
				<li class="strike">W3C check</li>
				<li class="strike">Give peace a chance!</li>
			</ul>	
			<ul id="note3" class="hide">
				<li class="strike">Add smooth transitions</li>
				<li class="strike">Gradient background header</li>
				<li class="strike">Move legend to sidebar</li>
				<li class="strike">Add carousel controls</li>
				<li class="strike">Animate logo with Canvas JS</li>
				<li class="strike">Make the web safer!</li>
			</ul>	
			<ul id="note4" class="hide">
				<li class="strike">Add login area</li>	
				<li class="strike">ySlow check</li>
				<li class="strike">Spitesheet all graphics</li>
				<li class="strike">Soliloquy blog</li>
				<li class="strike">restructure xhr code</li>
				<li>Cure world hunger!</li>
			</ul>			
			<p>{{ HTML::link("home/tasks", "more tasks...", array("title"=>"Flip through to-do history", "id"=>"note-flip", "class"=>"to-right href" )) }}</p>	
			<div class="clear-fix">&nbsp;</div>	
			<!--  
			Preload images?
			security check
			check on legacy and IE
			bug in textlist - 40px padding-left
			bug in LS between page loads
			rewrite js using backbone
			-->
		</section><!-- // notes -->
	</div><!-- // landing -->
	<div id="contentFrame" class="content"></div><!-- // contentFrame -->
@endsection<!-- main -->

@section('footer')@endsection

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
@endsection<!-- scripts -->
