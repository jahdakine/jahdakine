@layout('layout')

@section('title')
	About
@endsection

@section('header')
<style>
	/*TABS*/
	/* Layout helpers
	----------------------------------*/
	.ui-helper-hidden { display: none; }
	.ui-helper-hidden-accessible { border: 0; clip: rect(0 0 0 0); height: 1px; margin: -1px; overflow: hidden; padding: 0; position: absolute; width: 1px; }
	.ui-helper-reset { margin: 0; padding: 0; border: 0; outline: 0; line-height: 1.3; text-decoration: none; font-size: 100%; list-style: none; }
	.ui-helper-clearfix:before, .ui-helper-clearfix:after { content: ""; display: table; }
	.ui-helper-clearfix:after { clear: both; }
	.ui-helper-clearfix { zoom: 1; }
	.ui-helper-zfix { width: 100%; height: 100%; top: 0; left: 0; position: absolute; opacity: 0; filter:Alpha(Opacity=0); }

	/* Tabs
	----------------------------------*/
	.ui-tabs { position: relative; padding: .2em; zoom: 1; } /* position: relative prevents IE scroll bug (element with position: relative inside container with overflow: auto appear as "fixed") */
	.ui-tabs .ui-tabs-nav { margin: 0; padding: .2em .2em 0; border: 1px solid #e78f08; }
	.ui-tabs .ui-tabs-nav li { list-style: none; float: left; position: relative; top: 0; margin: 1px .2em 0 0; border-bottom: 0; padding: 0; white-space: nowrap; }
	.ui-tabs .ui-tabs-nav li a { float: left; padding: .5em 1em; text-decoration: none; }
	.ui-tabs .ui-tabs-nav li.ui-tabs-active { margin-bottom: -1px; padding-bottom: 1px; }
	.ui-tabs .ui-tabs-nav li.ui-tabs-active a, .ui-tabs .ui-tabs-nav li.ui-state-disabled a, .ui-tabs .ui-tabs-nav li.ui-tabs-loading a { cursor: text; }
	.ui-tabs .ui-tabs-nav li a, .ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active a { cursor: pointer; } /* first selector in group seems obsolete, but required to overcome bug in Opera applying cursor: text overall if defined elsewhere... */
	.ui-tabs .ui-tabs-panel { display: block; border-width: 0; padding: 1em 1.4em; background: none; }

	/* Component containers
	----------------------------------*/
	.ui-widget-content { border: 1px solid #888; background: #fff; }
	.ui-widget-header { border: 1px solid #fff; background: #f6a828 url(/css/vendor/images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x; }

	/* Interaction states
	----------------------------------*/
	/* inactive tabs*/
	.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default { background: #000; border: 1px solid #e78f08; }
	.ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited { color: #aaa; text-decoration: none; background-color: #555; }
	/* onhover */
	.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus { border: 1px solid #e78f08; background: #3dc1ff; }
	.ui-state-hover a, .ui-state-hover a:hover, .ui-state-hover a:link, .ui-state-hover a:visited { background: #0b75b2; text-decoration: none; text-shadow: none; }
	/* active tab*/
	.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active { border: 1px solid #e78f08; background: #fff; font-weight: bold; color: #c77405; }
	.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited { color: #f5ab31; text-decoration: none; background: #fff; }


	/* page specific */
	#tabs {
		right: 	auto;
		left: auto;
		overflow:hidden;
	}
	.box {
		margin-top: 1em;
		padding: 1em;
		position:relative;
		overflow: auto;
		width:100%;
	}
	.project-img {
		border:1px solid #bbb;
		margin-left:1em;
		width:60%;
	}
	.inside {
		list-style-position:inside;
	}
</style>
@endsection

@section('nav')
	@parent
@endsection

@section('top')
<hr class="shim">
@endsection

@section('aside')
@endsection

@section('main')
<article>
	<h3>History</h3>
	<p>Started out in mechanical design after a stint in ranching, fast food, 
	encyclopedia sales, hardware, and quality assurance testing. Worked in solids modeling 
	and quality control for a tape drive manufacturer. Developed a taste for computer programming while automating 
	processes and writing batch files.</p>

	<p>Apprenticed with a traffic crash analysis software firm testing and writing Delphi code.
	Completed a 4 year program in Computer Information Systems and began testing C++ code for a medical manufacturer.</p> 

	<p>Went on to do various SQL tasks for an accounting department at a computer solutions sales group.
	Eventually landed a web programming position in a communications department for Government 
	intra and extranets. This entailed design, documentation, programming and testing web applications.</p>

	<h3>Future</h3>
	<p>Sure, knowing how to serve up data correctly and guide users through complicated processes and make difficult concepts 
	understandable has its place, but the right side of my brain has begun to rebel a little and now has tipped the
	scales toward balance in additional creative outlets. The good news is the web is still a wonderful place to enhance both 
	creative and analytical skills! So my new career will include more front end work. My goal is to round into a full-stack
	developer and web artisan.</p>
</article>
<section>
	<h3>Skills</h3>
	<div id="wrapper1">
		<div id="skills">
			<ul>
				<li><a href="#skills-1">Solid Experience</a></li>
				<li><a href="#skills-2">Training</a></li>
				<li><a href="#skills-3">Some familiarity</a></li>
			</ul>
			<div id="skills-1">
			<ul>
				<li>ColdFusion (3-10)</li>
				<li>Database Design</li>
				<li>SQL - (SQL Server 2000/2008, mySQL, Postgres)</li>
				<li>HTML4.01</li>
				<li>CSS</li>
				<li>JavaScript (vanilla)</li>
				<li>RegEx</li>
				<li>Web Application Security</li>
			</ul>
			</div><!-- // skills-1 -->
			<div id="skills-2">
				<ul>
					<li>PHP (4 &amp; 5)</li>
					<li>MAMP</li>
					<li><dfn title="Heavy emphasis" class="def hilited">jQuery</dfn></li>
					<li>HTML5</li>
					<li><dfn title="Heavy emphasis" class="def hilited">Laravel</dfn></li>
					<li>AJAX/jSON</li>
					<li>CSS/3</li>
					<li>Sublime Text 2/VIM</li>
					<li>Git/Subversion</li>
					<li>RESTful applications</li>
				</ul> 
			</div><!-- // skills-2 -->
			<div id="skills-3">
			  <ul>
					<li>BASH</li>
					<li>Backbone</li>
					<li>Ruby/Rails</li>
					<li>WordPress</li>
					<li>Handlebars</li>
					<li>Modernizr/Prefixr</li>
					<li>SASS</li>	
					<li>SQL - Oracle</li>	
				</ul>
			</div><!-- // skills-3 -->
		</div><!-- // skills -->
	</div><!-- // wrapper1 -->
	<h3>Current Training</h3>
	<div id="wrapper2">
		<div id="courses">
			<ul>
				<li><a href="#courses-1">Completed Courses</a></li>
				<li><a href="#courses-2">Current Courses</a></li>
				<li><a href="#courses-3">Projects</a></li>
			</ul>
			<div id="courses-1">
				<h3>{{ HTML::link("https://tutsplus.com/", "Tuts+ Premium&#8663;", array("title"=>"Open Tuts+ Premium in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}</h3>
				<ul>
					<li>Laravel Essentials</li>
					<li>Advanced JavaScript Fundamentals</li>
					<li>Your Obedient Assistant: Yeoman</li>
					<li>Are You Using CoffeeScript?</li>
					<li>JavaScript Fundamentals 101</li>
					<li>Easy Development With jQuery Mobile</li>
					<li>30 Days to Learn jQuery</li>
					<li>Regular Expressions: Up and Running</li>
					<li>Perfect Workflow in Sublime Text 2</li>
					<li>HTML5 Fundamentals</li>
					<li>CSS3 Essentials</li>
					<li>The Joy of FirePHP: A Crash-Course</li>
					<li>WordPress Plugin Development Essentials</li>
					<li>PHP Fundamentals</li>
				</ul>
			</div><!-- // courses-1 -->
			<div id="courses-2">
				<h3>{{ HTML::link("https://tutsplus.com/", "Tuts+ Premium&#8663;", array("title"=>"Open Tuts+ Premium in a new window/tab", "target"=>"_blank", "class" => "offsite")) }}</h3>	
				<ul>
					<li>Hands-On: Build a Practical Web Application with Laravel</li>
					<li>Connected to the Backbone</li>
					<li>jQuery Plugin Development: Best Practices</li>
					<li>Venture Into Vim</li>
					<li>How To Customize Your Terminal</li>
					<li>Build a Canvas Image Editor with Canvas</li>
					<li>Object-Oriented JavaScript</li>
					<li>Learning MongoDB</li>
				</ul> 
			</div><!-- // courses-2 -->
			<div id="courses-3">
			  <ul>
					<li>Online CV (this site)</li>
					<li>2D Gaming</li>
					<li>Form Beautification</li>
					<li>Conference Generatr</li>
					<li>SoShl Parade</li>	
				</ul>
			</div><!-- // courses-3 -->
		</div><!-- // courses -->
	</div><!-- // wrapper2 -->
</section>             
@endsection

@section('footer')
@endsection

@section('scripts')
<script>
	(function() {
		/*setup tabs*/
		$("#skills").tabs();
		$("#courses").tabs();
	})();
</script>
@endsection
