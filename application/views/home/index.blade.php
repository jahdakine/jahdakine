@layout('layout')

@section('title') Home @endsection

@section('header')		
	{{ HTML::style('css/index.css') }}
@endsection

@section('nav')
	@parent
	<li class="to-right current">{{ HTML::link("#", "Reset", array("title"=>"Clear dynamic content area", "id"=>"reset", "class" => "current")) }}</li>
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
				{{ HTML::link("http://www.linkedin.com/profile/view?id=14123195", "Linkedin", array("title"=>"Open my LinkedIn profile page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'linkedin', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show ? from LinkedIn on this page -->
			</li>
			<li class="block1">
				{{ HTML::link("https://github.com/jahdakine", "GitHub", array("title"=>"Open my Github page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'github', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show ? from GitHub repo on this page -->
			</li>
			<li class="block1">
				{{ HTML::link("https://plus.google.com/u/0/114704033710627861845/posts", "Google+", array("title"=>"Open my Google+ page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'google', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show 5 latest comments from my Google+ circle on this page -->
			</li>			
			<li class="block1">
				{{ HTML::link("http://stackoverflow.com/users/1997909/jahdakine", "Stackoverflow", array("title"=>"Open my stackoverflow+ profile page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'stackoverflow', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show 5 latest question/answers from my stackoverflow on this page -->
			</li>
			<li class="block1">
				{{ HTML::link("www.yelp.com/", "Yelp", array("title"=>"Open Yelp site in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'yelp', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>
			<li class="block1">
				{{ HTML::link("https://www.icloud.com/", "iCloud", array("title"=>"Open iCloud site in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'icloud', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>
			<li class="block1">
				{{ HTML::link("https://vimeo.com/", "Vimeo", array("title"=>"Open Vimeo site in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'vimeo', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>		
		</ul><!-- //t1 -->
		<ul id="t2">
			<li class="block2">
				{{ HTML::link("http://www.youtube.com/user/jahdakine", "YouTube", array("title"=>"Open my YouTube page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'youtube', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}<!-- Show 5 latest movies from my channel on this page -->
			</li>
			<li class="block2">
				{{ HTML::link("https://twitter.com/jahdakine", "Twitter", array("title"=>"Open my Twitter page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'twitter', 'class' => 'feedBtn listImg', 'title' => 'Show 10 latest tweets on this page')) }}
			</li>
			<li class="block2">
				{{ HTML::link("http://www.flickr.com/photos/jahdakinebrah/", 'Flickr', array("title"=>"Open my Flickr page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'flickr', 'class' => 'feedBtn listImg', 'title' => 'Show 20 latest images from my stream on this page')) }}
			</li>
			<li class="block2">
				{{ HTML::link("http://jahdakine.blogspot.com/", "Blogger", array("title"=>"Open my Blogger page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'blogger', 'class' => 'feedBtn listImg', 'title' => 'Show latest 5 articles from my blog on this page')) }}
			</li>
			<li class="block2">
				{{ HTML::link("http://evernote.com/", "Evernote", array("title"=>"Open Evernote site in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'evernote', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}								
			</li>
			<li class="block2">
				{{ HTML::link("http://picasa.google.com/", "Picassa", array("title"=>"Open Picassa site in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'picassa', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>		
			<li class="block2">
				{{ HTML::link("http://www.fandango.com/", "Fandango", array("title"=>"Open Fandango site in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'fandango', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>						
		</ul><!-- // t2 -->
		<ul id="t3">	
			<li class="block3">
				{{ HTML::link("http://www.zazzle.com/jahdakine+gifts", "Zazzle", array("title"=>"Open my Zazzle gift catalog in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'zazzle', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }} <!--Show latest 3 creations from my gift catalog on this page-->
			</li>
			<li class="block3">
				{{ HTML::link("http://myworld.ebay.com/specrun/", "eBay", array("title"=>"Open my eBay profile page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'ebay', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}
			</li>
			<li class="block3">
				{{ HTML::link("http://grooveshark.com/#!/jahdakine", "Grooveshark", array("title"=>"Open my GrooveShark profile page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'grooveshark', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}				
			</li>	
			<li class="block3">
				{{ HTML::link("http://www.meetup.com/HTML5-Denver-Users-Group/members/65732862/", "Meetup", array("title"=>"Open my Meetup profile page in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'meetup', 'class' => 'feedBtn listImg', 'title' => 'Coming soon')) }}				
			</li>		
			<li class="block3">
				{{ HTML::link("https://www.netflix.com/", "Netflix", array("title"=>"Open Netflix site in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'netflix', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>
			<li class="block3">
				{{ HTML::link("http://beta.skype.com/en/", "Skype", array("title"=>"Open Skype site in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'skype', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>	
			<li class="block3">
				{{ HTML::link("http://mail.google.com", "Gmail", array("title"=>"Open Gmail site in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}
				{{ HTML::link('#', '', array('id' => 'gmail', 'class' => 'feedBtn listImg', 'title' => 'You must be logged in to access private account', "onclick" => "return false;")) }}				
			</li>		
		</ul><!-- // t3 -->
	</div><!-- // carousel -->
</div><!-- // list -->
<!-- !!!more to consider adding:
	http://www.fandango.com/centuryboulder_aauni/theaterpage 
  http://developer.netflix.com/docs/JavaScript_APIs
-->
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
			{{ HTML::link("http://laravel.com/docs", "Laravel", array("title"=>"Offsite to Laravel Documentation in a new window", "target"=>"_blank", "class" => "offsite")) }}, the 
			<abbr title="Model View Controller">MVC</abbr>
			framework that I'm gravitating to at the moment. It is responsive, accessible, and includes an ever popular scrolling style jQuery menu carousel 
			(List menu | Image list) that I'm thinking I'll call the social parade. It is basically my playground to spend time trying out new technologies and learning 
			about what works and what doesn't in the fine art and science of internet programming and design. Tabs and other user interface goodies can be found at
			{{ HTML::link("http://jqueryui.com/", "jQuery UI", array("title"=>"Offsite to jQuery UI in a new window", "target"=>"_blank", "class" => "offsite")) }}.
			Customizable tooltips:
			{{ HTML::link("http://craigsworks.com/projects/qtip2/", "qTips2", array("title"=>"Offsite to qTips2 in a new window", "target"=>"_blank", "class" => "offsite")) }}.
			Image carousel is available at 
			{{ HTML::link("http://caroufredsel.dev7studios.com/", "carouFred", array("title"=>"Offsite to carouFred in a new window", "target"=>"_blank", "class" => "offsite")) }}.
			<abbr title="Javascript Object Notation">jSON</abbr> request examples are documented within the  
			{{ HTML::link("http://api.jquery.com/jQuery.getJSON/", "jQuery API", array("title"=>"Offsite to jQuery API in a new window", "target"=>"_blank", "class" => "offsite")) }}.
			Mail hide utility demonstrated on {{ HTML::link("contact", "Contact page", array("title"=>"Contact page")) }} courtesy of Google's 
			{{ HTML::link("http://www.google.com/recaptcha/mailhide/", "reCAPTCHA", array("title"=>"Offsite to Mail Hide in a new window", "target"=>"_blank", "class" => "offsite")) }}. 
			Slick icons from the folks at {{ HTML::link("http://www.iconarchive.com/", "IconArchive", array("title"=>"Offsite to IconArchive in a new window", "target"=>"_blank", "class" => "offsite")) }},
			a useful sprite generator that actually works can be found at 
			{{ HTML::link("http://www.floweringmind.com/sprite-creator/index.php", "Flowering Mind", array("title"=>"Open sprite generator in a new window/tab", "target"=>"_blank", "class" => "offsite")) }},  
			and of some ultra nice styling is courtesy of 
			{{ HTML::link("http://twitter.github.com/bootstrap/customize", "Twitter's Bootstrap", array("title"=>"Offsite to Bootstrap Customization in a new window", "target"=>"_blank", "class" => "offsite")) }}.
			<p>
				This is as much a launching pad for me as it is a showcase of what I care about and can do. Please excuse the external linking to new windows, 
				I keep this page open during my surfing day and would rather not right click links to get them into a separate tab. I will work on a switcher that 
				allows an override of this functionality. 
			</p>
			<p id="carouselHelp" class="hide">
			 Included on selected items in the image list carousel are jSON feeds, via logo links. All external links available in 
			 the default text list (List menu | Text list) are accessible above the site logos. Note: I participate in some social networking sites more that others. Some hardly at all. The purpose of displaying 
			 some of them may be more of an excersize in learning their APIs than in participation.
			</p>
		</article>	
		<section class="notes">
			<h3 class="to-center">To do:</h3> 
			<ul>
				<li>Create external link switcher</li>
				<li>Research remaining API calls</li>
				<li>Build out login area</li>
				<li>Facility for adding icons/sites</li>
				<li>Package (minify, optimize)</li>
				<li>Arrive at energy independence</li>
			</ul>																
		</section><!-- // notes -->
	</div><!-- // landing -->
	<div id="contentFrame" class="content"></div><!-- // contentFrame -->

@endsection

@section('footer')	
@endsection

@section('scripts')
	{{ HTML::script('js/vendor/jquery.carouFredSel-6.2.0-packed.js') }}
	{{ HTML::script('js/vendor/jquery.center.min.js') }}	
	{{ HTML::script('js/index.funcs.js') }}
@endsection
