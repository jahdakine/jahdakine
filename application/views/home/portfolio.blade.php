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
@endsection

@section('aside')
@endsection

@section('main')	
	<section>
		<h4>Past projects</h4>
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
				<ul id="tab-links" class="hide">
					<li><a class="clients href" href="#contracts">Contracts&nbsp;</a></li>
					<li><a class="clients href" href="#nrel">NREL&nbsp;<abbr title="National Renewable Energy Laboratory"><i class="icon-question-sign"></i></abbr></a></li>
					<li><a class="clients href" href="#eere">EERE&nbsp;<abbr title="Energy Efficiency and Renewable Energy Network"><i class="icon-question-sign"></i></abbr></a></li>
					<li><a class="clients href" href="#source">Source&nbsp;<abbr title="NREL's Intranet"><i class="icon-question-sign"></i></abbr></a></li>				
					<li><a class="clients href" href="#doe">DOE&nbsp;<abbr title="Department of Energy"><i class="icon-question-sign"></i></abbr></a></li>	
					<li><a class="clients href" href="#volunteer">Volunteer&nbsp;</a></li>	
				</ul>
				<div id="contracts">
				<h5 class="h5nojs">Contracts</h5>
				<ul>
					<li><a href="project/treasury/null/" title="Show description and screenshots" class="project href">Treasury</a></li>
					<li><a href="project/solar_decathlon/null/" title="Show description and screenshots" class="project href">Solar Decathlon</a></li>
					<li><a href="project/usda/capsnoimg" title="Show description and screenshots" class="project no-image href">USDA</a></li>
					<li><a href="project/american_solar_challenge/null/" title="Show description and screenshots" class="project href">American Solar Challenge</a></li>
					<li><a href="project/denver_public_library/noimg" title="Show description and screenshots" class="project no-image href">Denver Public Library</a></li>
					<li><a href="project/aia/capsnoimg" title="Show description and screenshots" class="project no-image href">AIA</a>&nbsp;<abbr title="American Institute of Architects"><i class="icon-question-sign"></i></abbr></li>
				</ul>
				<section id="contractsFrame" class="box hide"></section>
				</div><!-- // contracts -->			
				<div id="nrel">
					<h5 class="h5nojs">NREL (National Renewable Energy Laboratory)</h5>
					<ul>
						<li><a href="project/jedi_model_downloads/caps" title="Show description and screenshots" class="project href">JEDI Model Downloads</a></li>
						<li><a href="project/basic_sciences/null/" title="Show description and screenshots" class="project href">Basic Sciences</a></li>
						<li><a href="project/thin_film_partnerships/null/" title="Show description and screenshots" class="project href">Thin Film Partnerships</a></li>
						<li><a href="project/news_and_events/null/" title="Show description and screenshots" class="project href">News and Events</a></li>
						<li><a href="project/pv_partnerships/caps" title="Show description and screenshots" class="project href">PV Partnerships</a></li>
						<li>Conference Generator - Form wizard builds conference sites with registration</li>
						<li>Survey in a Box - Question wizard builds surveys complete with stats</li> 
					</ul> 
					<section id="nrelFrame" class="box hide"></section> 		
				</div><!-- // nrel -->
				<div id="eere">
					<h5 class="h5nojs">EERE (Energy Efficiency and Renewable Energy Network)</h5>
				  <ul>
						<li><a href="project/energy_plus_example_file_generator/null/" title="Show description and screenshots" class="project href">Energy Plus Example File Generator</a></li>
						<li><a href="project/energy_plus_weather_data/null/" title="Show description and screenshots" class="project href">Energy Plus Weather Data</a></li>
						<li><a href="project/energy_plus_real-time_weather/null/" title="Show description and screenshots" class="project href">Energy Plus Real-Time Weather</a></li>						
						<li><a href="project/building_america/null/" title="Show description and screenshots" class="project href">Building America</a></li>
						<li><a href="project/software_tools/null/" title="Show description and screenshots" class="project href">Software Tools</a></li>						
					</ul>
				</div><!-- // eere -->
				<section id="eereFrame" class="box hide"></section>
				<div id="source">
					<h5 class="h5nojs">Source (NREL's Intranet)</h5>
				  <ul>
						<li><a href="project/nrel_now/capsnoimg" title="Show description and screenshots" class="project no-image href">NREL Now</a></li>
						<li><a href="project/library/noimg" title="Show description and screenshots" class="project no-image href">Library</a></li>
					</ul>
					<section id="sourceFrame" class="box hide"></section>
				</div><!-- // source -->		
				<div id="doe">
					<h5 class="h5nojs">DOE (Department of Energy)</h5>
				  <ul>
						<li><a href="project/hydrogen_and_fuel_cells_program/null/" title="Show description and screenshots" class="project href">Hydrogen and Fuel Cells Program</a></li>
					</ul>
					<section id="doeFrame" class="box hide"></section>
				</div><!-- // doe -->		
				<div id="volunteer">
					<h5 class="h5nojs">Volunteer (Pro Bono)</h5>
				  <ul>
						<!-- <li><a href="project/" title="Show description and screenshots" class="project">One Voice ~ Many Paths</a></li> -->										
						<li><a href="project/gnerdl/noimg" title="Show description and screenshots" class="project no-image href">Gnerdl</a></li>										
						<li><a href="project/corin_design/null/" title="Show description and screenshots" class="project href">Corin Design</a></li>
						<li><a href="project/personal_site/null/" title="Show description and screenshots" class="project href">Personal Site</a></li>
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
