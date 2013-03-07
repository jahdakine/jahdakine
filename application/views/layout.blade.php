<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8"> 
	<title>@yield('title')</title>
	{{ HTML::style('css/vendor/jquery.qtip2.css') }}
	{{ HTML::style('css/layout.css') }}	
	{{ HTML::style('css/vendor/bootstrap.css') }} 
	<!-- <link href="&lt;?=Minifier::make(array('//css/layout.css', '//css/vendor/bootstrap.css', '//css/vendor/jquery.qtip2.css'))?>" rel="stylesheet" type="text/css"> -->
	@yield('header')
</head>

<body>
	<a href="#content" class="hidden">Skip navigation</a> 
	<div class="wrapper">
		<header id="whats-this">
			<h1>@yield("title")</h1>
			<h2 id="nickName">John Chase</h2>
			<h3>Web Developer</h3>
			@if(!URI::is('users/login'))
				{{ HTML::link("users/login", "Sign-on", array("class"=>"href")) }}
			@endif
		</header>
		<div id="navigation">
			<ul class="drop" id="nav">
				@section('nav')
					@if(URI::is('home') || URI::is('/'))
						<li class="current">Home 
					@else 
						<li>{{ HTML::link('home/','Home') }}
					@endif 
						<ul>
							@if(URI::is('home/technology'))
								<li class="current">Technology</li>
							@else
								<li>{{ HTML::link("home/technology", "Technology") }}</li>
							@endif							
						</ul>
					</li>
					@if(URI::is('home/about'))
						<li class="current">About
					@else 
						<li>{{ HTML::link('home/about', 'About') }}
					@endif 
						<ul>
							@if(URI::is('home/portfolio'))
								<li class="current">Porfolio</li>
							@else
								<li>{{ HTML::link("home/portfolio", "Portfolio") }}</li>
							@endif
							@if(URI::is('home/resume'))
								<li class="current">Resume</li>
							@else
								<li>{{ HTML::link("home/resume", "Resume") }}</li>
							@endif							
						</ul>
					</li> 
					@if(URI::is('home/contact'))
						<li class="current">Contact</li> 
					@else 
						<li>{{ HTML::link('home/contact','Contact') }}</li>
					@endif 																		
				@yield_section <!-- will yield and close section -->
			</ul>
		</div><!-- // navigation -->
		<div class="clear-fix" id="content"></div>
		@yield('top')
		@yield('controls')
		<div role="main" class="main" id="main">
			<aside id="legend">
				<h4 class="to-center reset">Legend</h4>
					<ul class="nolist small">
						<li><span id="onsiteLink" class="href-aside" title="Links to web pages on this site">Onsite link</span></li>
						<li><span class="href-aside" title="Links to web pages on an external site in this window">This window offsite link&#8658;</span></li>
						<li><span class="href-aside" title="Links to web pages on an external site in a new window">New window offsite link&#8663;</span></li>
						<li><span class="href-aside" title="Links to pop-up windows">Popup&#8657;</span></li>
						<li><span class="hover-aside" title="Link style with cursor above">Hover</span></li>
						<li><span id="visitedLink" class="visited-aside" title="Links that have been followed">Visited</span></li>
						<li><span class="def" title="Tooltip style">Acronym/Definition</span></li>
					</ul>
			</aside>
			<aside id="aside">
				<h4 class="to-center reset">Commands</h4>
				<ul class="nolist">
					<li><a href="{{URL::current();}}/print" class="href small to-bottom" title="Properly format this page and print it"><i class="icon-print"></i>&nbsp;Print</a>
					<li><a href="#" class="href small to-bottom color-toggle" title="Swap between standard and lighter link colors"><i class="icon-adjust"></i>&nbsp;Contrast</a>
					<li><a href="#" class="href small to-bottom link-toggle" title="Swap between new and same page external linking"><i class="icon-filter"></i>&nbsp;Linking<span class="offsite">&#8663;</span></a>
					@yield('index')	
					<li><a href="#content" class="href small to-bottom hide" title="Scroll to top" id="top-link"><i class="icon-hand-up"></i>&nbsp;Top of page</a>
				</ul>
				<h4 class="to-center reset">Share</h4>
					<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style">
						<a class="addthis_button_preferred_1"></a>
						<a class="addthis_button_preferred_2"></a>
						<a class="addthis_button_preferred_3"></a>
						<a class="addthis_button_preferred_4"></a>
						<a class="addthis_button_compact"></a>
						<a class="addthis_counter addthis_bubble_style"></a>
					</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-511ff8b15092ccae"></script>
				<!-- AddThis Button END -->
				@yield('aside')
			</aside><!-- // aside -->
			@yield('main')
			<div class="clear-fix pad"></div>
		</div><!-- // content -->
		<footer class="copy">
			<div class="to-left">&copy;{{ date('Y') }} John Chase (aka 
				<span>
					<dfn title="IPA phonetics: dʒɑ dɑ <strong>ki</strong> neɪ <br/>(sounds like: jaw duh <strong>key</strong> nay)" class="black">jahdakine</dfn>
				</span>)
				<span id="nickSpan">
					<a href="#" id="nickButton" title="Play nickname pronunciation audio (wav)" class="access-link white">Play nickname pronunciation audio (wav)</a>
				</span>
			</div>
			<div class="to-right">Hosted by {{ HTML::link("https://pagodabox.com/", "Pagoda Box&#8663;", array("title"=>"Open Pagoda Box in a new window", "target"=>"_blank", "class"=>"offsite href pbox reset")) }}</div>
			<div class="to-center">
				<div id="audioWrap" class="hide">
					<a id="nickHide" href="#" title="Dismiss player" class="access-link white">Dismiss player</a>
				</div>			
				<div><time datetime="2013-03-05T09:43">March 5th, 2013</time></div>
			</div>
		</footer>
	</div> <!-- // wrapper -->
	<!-- monolith contains:
	{ HTML::script('js/vendor/jquery-1.8.2.min.js') }}	
	{ HTML::script('js/vendor/jquery-ui-1.9.2.custom.min.js') }}
	{ HTML::script('js/vendor/jquery.qtip2.min.js') }}		
	{ HTML::script('js/vendor/jquery.carouFredSel-6.2.0-packed.js') }}
	{ HTML::script('js/vendor/helper-plugins/jquery.touchSwipe.min.js') }}	
	{ HTML::script('js/vendor/jquery.center.min.js') }}	
	google analytics code
	-->
	{{ HTML::script('js/vendor/monolith.js') }}	
	{{ HTML::script('js/layout.funcs.js') }}
 	<!--<script src="&lt;?=Minifier::make(array('//js/vendor/jquery-1.8.2.min.js','//js/vendor/jquery-ui-1.9.2.custom.min.js','//js/vendor/jquery.qtip2.min.js','//js/vendor/jquery.carouFredSel-6.2.0-packed.js','//js/vendor/helper-plugins/jquery.touchSwipe.min.js','//js/vendor/jquery.center.min.js','//js/layout.funcs.js'))?>" type="text/javascript"> -->	
	@yield('scripts')
</body>
</html>