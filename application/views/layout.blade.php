<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8"> 
	<title>@yield('title')</title>
	{{ HTML::style('css/vendor/jquery.qtip2.css') }}
	{{ HTML::style('css/layout.css') }} 
	@yield('header')
</head>

<body>
	<a href="#content" class="hidden">Skip navigation</a> 
	<div class="wrapper">
		<header id="whats-this">
			<h1>@yield("title")</h1>
			<h2 id="nickName">John Chase</h2>
			<h4>Web Developer</h4>
			<!-- HTML::link("users/", "Sign-on") }} -->
			<abbr title="Coming soon">Sign-on</abbr>
		</header>
		<div id="navigation">
			<ul class="drop" id="nav">
				@section('nav')
					@if(URI::is('home') || URI::is('/'))
						<li class="current">Home</li> 
					@else 
						<li>{{ HTML::link('home/','Home') }}</li>
					@endif 
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
							@if(URI::is('home/technology'))
								<li class="current">Technolgy</li>
							@else
								<li>{{ HTML::link("home/technology", "Technology") }}</li>
							@endif							
						</ul>
					</li> 
					@if(URI::is('home/contact'))
						<li class="current">Contact</li> 
					@else 
						<li>{{ HTML::link('home/contact','Contact') }}</li>
					@endif 	
					<li class="to-right">
						{{ HTML::link("#", "Commands") }}
						<ul>
							@if(URI::is('home') || URI::is('/'))
								<li class="current">{{ HTML::link("#", "Reset", array("title"=>"Clear dynamic content area", "id"=>"reset", "class" => "current")) }}</li>
							@endif
							<li>{{ HTML::link("#", "Toggle links", array("title"=>"Set external linking style", "id"=>"link-toggle")) }}</li>
					</ul>
					</li>														
				@yield_section <!-- will yield and close section -->
			</ul>
		</div><!-- // navigation -->	
		<div class="clear-fix"></div>
		@yield('top')
		<div role="main" id="content" class="main">		
			<aside id="aside" class="landAside">
				<h3 class="to-center">Legend</h3>
				<ul class="nolist">
					<li><span class="href" title="Links to web pages on this site">Onsite link</span></li>
					<li><span class="href" title="Links to web pages on an external site in this window">This window offsite link&#8658;</span></li>
					<li><span class="href" title="Links to web pages on an external site in a new window">New window offsite link&#8663;</span></li>
					<li><span class="href" title="Links to pop-up windows">Popup&#8657;</span></li>
					<li><span class="hover" title="Link style with cursor above">Hover</span></li>
					<li><span class="visited" title="Links that have been followed">Visited</span></li>
					<li><span class="dfn def" title="Tooltip style">Acronym/Abbreviation/Definition</span></li>
				</ul>
				@yield('aside')
			</aside><!-- // aside -->
			@yield('main')
		</div><!-- // content -->
		<div class="clear-fix"></div>
		<footer class="flex-footer copy">
			<div class="to-left">Copyright &copy;{{ date('Y') }} John Chase (aka 
				<u class="def">
					<dfn title="IPA phonetics: dʒɑ dɑ <strong>ki</strong> neɪ <br/>(sounds like: jaw duh <strong>key</strong> nay)">jahdakine</dfn>
				</u>)
				<span style="padding-top:2px;">
					<a id="nickButton" href="#" title="Play nickname pronunciation audio (wav)"></a>
				</span>
			</div>
			<div class="to-right"><time datetime="2013-02-13T08:00">Last Updated: February 8th, 2013</time></div>
			<div class="to-center">
				<div id="audioWrap" class="hide">
					<a id="nickHide" href="#" title="Dismiss player"></a>
				</div>
				<div>Site hosted by {{ HTML::link("https://pagodabox.com/", "Pagoda Box&#8663;", array("title"=>"Open Pagoda Box in a new window", "target"=>"_blank", "class"=>"offsite")) }}</div>
			</div>
		</footer>
	</div> <!-- // wrapper -->
	<!-- 
	{ HTML::script('js/vendor/jquery-1.8.2.min.js') }}	
	{ HTML::script('js/vendor/jquery-ui-1.9.2.custom.min.js') }}
	{ HTML::script('js/vendor/jquery.qtip2.min.js') }}		
	{ HTML::script('js/vendor/jquery.carouFredSel-6.2.0-packed.js') }}
	{ HTML::script('js/vendor/helper-plugins/jquery.touchSwipe.min.js') }}	
	{ HTML::script('js/vendor/jquery.center.min.js') }}	
 	-->	
	{{ HTML::script('js/vendor/monolith.js') }}	
	{{ HTML::script('js/layout.funcs.js') }}
	@yield('scripts')
</body>
</html>