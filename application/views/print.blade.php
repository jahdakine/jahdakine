<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8"> 
	<title>@yield('title')</title>
	{{ HTML::style('css/print.css') }} 
	@yield('header')
</head>

<body>
	<header>
		<h1>@yield("title")</h1>
		<h2 id="nickName">John Chase</h2>
		<h3>Web Developer</h3>
	</header>
	<hr>
	<div class="clear-fix" id="content"></div>
	@yield('top')
	<div role="main" class="main">		
		@yield('main')
	</div><!-- // content -->
	<div class="clear-fix"></div>
	<hr>
	<footer>
		<div class="to-left">&copy;{{ date('Y') }} John Chase (aka jahdakine)</div>
		<div class="to-right">Hosted by {{ HTML::link("https://pagodabox.com/", "Pagoda Box&#8663;", array("title"=>"Open Pagoda Box in a new window", "target"=>"_blank", "class"=>"offsite href pbox")) }}</div>
		<div class="to-center"><time datetime="2013-03-05T09:43">March 5th, 2013</time></div>
	</footer>
	<script>
	(function() {	
		window.print(); 
		setTimeout(function(){ 
			window.history.back();
		}, 3000);
	})();
	</script>
</body>
</html>