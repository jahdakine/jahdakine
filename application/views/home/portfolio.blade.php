@layout('layout')

@section('title')
	Portfolio
@endsection

@section('header')
	{{ HTML::style('css/about.css') }}
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
	<section>
		<h3>Past projects</h3>
		<article>
			<p>
				Many of my projects are protected by authentication protocols and are inaccessible to the public. 
				I have presented screenshots that will provide general concepts only, but have enhanced these with detailed 
				descriptions where possible. This is a small sample of my past applications, and I will continue to add to them
				where possible.
			</p>
			<p>
				Some screenshots have been obtained through the 
				{{ HTML::link("http://archive.org/web/web.php", "Internet Archive (Wayback Machine)&#8663;", array("title"=>"Offsite to Wayback Machine in a new window", "target"=>"_blank", "class" => "offsite href")) }} 
				if the site is no longer available or has been radically changed from the time of my involvement.
			</p>
			<p>
				Select a client from tabs below revealing a sample of the projects delivered. Click on a specific project to view screenshot(s) and 
				description/statement of work and tools listing. Projects roughly in date order - newest first.
			</p>
			<br/>
		</article>
		<div id="tabs">
			<div id="projects">
				<ul>
					<li><a class="clients href" href="#contracts">Contracts&nbsp;</a></li>
					<li><a class="clients href" href="#nrel">NREL&nbsp;<abbr title="National Renewable Energy Laboratory">(?)</abbr></a></li>
					<li><a class="clients href" href="#eere">EERE&nbsp;<abbr title="Energy Efficiency and Renewable Energy Network">(?)</abbr></a></li>
					<li><a class="clients href" href="#source">Source&nbsp;<abbr title="NREL's Intranet">(?)</abbr></a></li>				
					<li><a class="clients href" href="#doe">DOE&nbsp;<abbr title="Department of Energy">(?)</abbr></a></li>	
					<li><a class="clients href" href="#volunteer">Volunteer&nbsp;</a></li>	
				</ul>
				<div id="contracts">
				<ul>
					<li><a href="#" title="Show description and screenshots" class="project href">Treasury</a></li>
					<li><a href="#" title="Show description and screenshots" class="project href">Solar Decathlon</a></li>
					<li><a href="#" title="Show description and screenshots" class="project no-image href">USDA</a></li>
					<li><a href="#" title="Show description and screenshots" class="project href">American Solar Challenge</a></li>
					<li><a href="#" title="Show description and screenshots" class="project no-image href">Denver Public Library</a></li>
					<li><a href="#" title="Show description and screenshots" class="project no-image href">AIA</a>&nbsp;<abbr title="American Institute of Architects">(?)</abbr></li>
				</ul>
				<section id="contractsFrame" class="box hide"></section>
				</div><!-- // contracts -->			
				<div id="nrel">
					<ul>
						<li><a href="#" title="Show description and screenshots" class="project href">JEDI Model Downloads</a></li>
						<li><a href="#" title="Show description and screenshots" class="project href">Basic Sciences</a></li>
						<li><a href="#" title="Show description and screenshots" class="project href">Thin-Film Partnerships</a></li>
						<li><a href="#" title="Show description and screenshots" class="project href">News and Events</a></li>
						<li><a href="#" title="Show description and screenshots" class="project href">PV Partnerships</a></li>
						<li>Conference Generator - Form wizard builds conference sites with registration</li>
						<li>Survey in a Box - Question wizard builds surveys complete with stats</li> 
					</ul> 
					<section id="nrelFrame" class="box hide"></section> 		
				</div><!-- // nrel -->
				<div id="eere">
				  <ul>
						<li><a href="#" title="Show description and screenshots" class="project href">Energy Plus Example File Generator</a></li>
						<li><a href="#" title="Show description and screenshots" class="project href">Energy Plus Weather Data</a></li>
						<li><a href="#" title="Show description and screenshots" class="project href">Energy Plus Real-Time Weather</a></li>						
						<li><a href="#" title="Show description and screenshots" class="project href">Building America</a></li>
						<li><a href="#" title="Show description and screenshots" class="project href">Software Tools</a></li>						
					</ul>
				</div><!-- // eere -->
				<section id="eereFrame" class="box hide"></section>
				<div id="source">
				  <ul>
						<li><a href="#" title="Show description and screenshots" class="project no-image href">NREL Now</a></li>
						<li><a href="#" title="Show description and screenshots" class="project no-image href">Library</a></li>
					</ul>
					<section id="sourceFrame" class="box hide"></section>
				</div><!-- // source -->		
				<div id="doe">
				  <ul>
						<li><a href="#" title="Show description and screenshots" class="project href">Hydrogen and Fuel Cells Program</a></li>
					</ul>
					<section id="doeFrame" class="box hide"></section>
				</div><!-- // doe -->		
				<div id="volunteer">
				  <ul>
						<!-- <li><a href="#" title="Show description and screenshots" class="project">One Voice ~ Many Paths</a></li> -->										
						<li><a href="#" title="Show description and screenshots" class="project no-image href">Gnerdl</a></li>										
						<li><a href="#" title="Show description and screenshots" class="project href">Corin Design</a></li>
						<li><a href="#" title="Show description and screenshots" class="project href">Personal Site</a></li>
					</ul>
					<section id="volunteerFrame" class="box hide"></section>
				</div><!-- // volunteer -->									
			</div><!-- // projects -->
		</div><!-- // tabs -->
	</section>    
@endsection

@section('footer')
@endsection

@section('scripts')
	{{ HTML::script('js/portfolio.funcs.js') }}
@endsection
