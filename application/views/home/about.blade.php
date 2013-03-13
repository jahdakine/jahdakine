@layout('layout')

@section('title')
	About
@endsection

@section('header')
	{{ HTML::style('css/about.css') }}
@endsection

@section('nav')
	@parent
@endsection

@section('top')
@endsection

@section('aside')
@endsection

@section('main')
<article>
	<h4>History</h4>
	<p>Started out in mechanical design after a stint in ranching, fast food, 
	encyclopedia sales, hardware, and quality assurance testing. Worked in solids modeling 
	and quality control for a tape drive manufacturer. Developed a taste for computer programming while automating 
	processes and writing batch files.</p>

	<p>Apprenticed with a traffic crash analysis software firm testing and writing Delphi code.
	Completed a 4 year program in Computer Information Systems and began testing C++ code for a medical manufacturer.</p> 

	<p>Went on to do various SQL tasks for an accounting department at a computer solutions sales group.
	Eventually landed a web programming position in a communications department for Government 
	intra and extranets. This entailed design, documentation, programming and testing web applications.</p>

	<h4>Future</h4>
	<p>Sure, knowing how to serve up data correctly and guide users through complicated processes and make difficult concepts 
	understandable has its place, but the right side of my brain has begun to rebel a little and now has tipped the
	scales toward balance in additional creative outlets. The good news is the web is still a wonderful place to leverage both 
	creative and analytical skills! So my new career will include more front end work. My goal is to round into a full-stack
	developer and web artisan<sup>1</sup>.</p>
</article>
<section>
	<h4>Skills</h4>
	<div id="wrapper1">
		<div id="skills">
			<ul id="skills-links" class="hide">
				<li><a href="#skills-1">Solid Experience</a></li>
				<li><a href="#skills-2">Training</a></li>
				<li><a href="#skills-3">Some familiarity</a></li>
			</ul>
			<div id="skills-1">
			<h5 class="h5nojs">Solid Experience</h5>
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
				<h5 class="h5nojs">Training</h5>
				<ul>
					<li>PHP (4 &amp; 5)</li>
					<li>MAMP</li>
					<li><span title="Heavy emphasis" class="hilited">jQuery</span></li>
					<li>HTML5</li>
					<li><span title="Heavy emphasis" class="hilited">Laravel</span></li>
					<li>AJAX/jSON</li>
					<li>CSS/3</li>
					<li>Sublime Text 2/VIM</li>
					<li>Git/Subversion</li>
					<li>RESTful applications</li>
				</ul> 
			</div><!-- // skills-2 -->
			<div id="skills-3">
				<h5 class="h5nojs">Some familiarity</h5>
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
	<h4>Current Training</h4>
	<div id="wrapper2">
		<div id="courses">
			<ul id="courses-links" class="hide">
				<li><a href="#courses-1">Completed Courses</a></li>
				<li><a href="#courses-2">Current Courses</a></li>
				<li><a href="#courses-3">Projects</a></li>
			</ul>
			<div id="courses-1">
				<h5 class="h5nojs">Completed Courses</h5>
				<div>
					<h6>{{ HTML::link("https://tutsplus.com/", "Tuts+ Premium&#8663;", array("title"=>"Open Tuts+ Premium in a new window/tab", "target"=>"_blank", "class" => "offsite href")) }}</h6>
					<ul>
						<li>Learning MongoDB</li>
						<li>Hands-On: Build a Practical Web Application with Laravel</li>
						<li>Laravel Essentials</li>
						<li>Advanced JavaScript Fundamentals</li>
						<li>Your Obedient Assistant: Yeoman</li>
						<li>Are You Using CoffeeScript?</li>
						<li>JavaScript Fundamentals 101</li>
						<li>Easy Development With jQuery Mobile</li>
						<li>30 Days to Learn jQuery</li>
						<li>WordPress Plugin Development Essentials</li>
						<li>Regular Expressions: Up and Running</li>
						<li>Perfect Workflow in Sublime Text 2</li>
						<li>The Joy of FirePHP: A Crash-Course</li>
						<li>PHP Fundamentals</li>
						<li>HTML5 Fundamentals</li>
						<li>CSS3 Essentials</li>					
					</ul>
				</div>
				<div>
					<h6>{{ HTML::link("http://www.codeschool.com/", "Code School&#8663;", array("title"=>"Open Code School in a new window/tab", "target"=>"_blank", "class" => "offsite href")) }}</h6>	
					<ul>
						<li>Try Ruby</li>
						<li>Try jQuery</li>
						<li>Try Git</li>
						<li>Rails for Zombies</li>
					</ul> 
				</div>				
			</div><!-- // courses-1 -->
			<div id="courses-2">
				<h5 class="h5nojs">Current Courses</h5>
				<div>
					<h6>Tuts Premium</h6>	
					<ul>
						<li>Connected to the Backbone</li>
						<li>jQuery Plugin Development: Best Practices</li>
						<li>Venture Into Vim</li>
						<li>How To Customize Your Terminal</li>
						<li>Build a Canvas Image Editor with Canvas</li>
						<li>Object-Oriented JavaScript</li>
					</ul> 
				</div>
				<div>
					<h6>Code School</h6>	
					<ul>
						<li>Try R</li>
						<li>CSS Cross Country</li>
						<li>The Anatomy of Backbone</li>
						<li>Git Real</li>
					</ul> 
				</div>
			</div><!-- // courses-2 -->
			<div id="courses-3">
				<h5 class="h5nojs">Projects</h5>
			  <ul>
					<li>Online CV (this site)</li>
					<li>Gnerdl (consulting - requirements gathering)</li>
					<!-- <li>One Voice ~ Many Paths (volunteer - non-profit)</li> -->
					<li>Conference Generatr (modernize NREL project)</li>
					<li>SoShl Parade (extension of home page)</li>	
				</ul>
			</div><!-- // courses-3 -->
		</div><!-- // courses -->
	</div><!-- // wrapper2 -->
	<p><sup>1</sup>Borrowed from the Laravel community.
</section>             
@endsection

@section('footer')
@endsection

@section('scripts')
	{{ HTML::script('js/about.funcs.js') }}
@endsection
