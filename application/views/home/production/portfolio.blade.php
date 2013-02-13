@layout('layout')

@section('title')
	Portfolio
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
				Screenshots have been obtained through the 
				{{ HTML::link("http://archive.org/web/web.php", "Internet Archive (Wayback Machine)&#8663;", array("title"=>"Offsite to Wayback Machine in a new window", "target"=>"_blank", "class" => "offsite")) }} 
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
					<li><a class="clients" href="#contracts">Contracts&nbsp;</a></li>
					<li><a class="clients" href="#nrel">NREL&nbsp;<abbr title="National Renewable Energy Laboratory">(?)</abbr></a></li>
					<li><a class="clients" href="#eere">EERE&nbsp;<abbr title="Energy Efficiency and Renewable Energy Network">(?)</abbr></a></li>
					<li><a class="clients" href="#source">Source&nbsp;<abbr title="NREL's Intranet">(?)</abbr></a></li>				
					<li><a class="clients" href="#doe">DOE&nbsp;<abbr title="Department of Energy">(?)</abbr></a></li>	
				</ul>
				<div id="contracts">
				<ul>
					<li><a href="#" title="Show description and screenshots" class="project">Treasury</a></li>
					<li><a href="#" title="Show description and screenshots" class="project">Solar Decathlon</a></li>
					<li><a href="#" title="Show description and screenshots" class="project no-image">USDA</a></li>
					<li><a href="#" title="Show description and screenshots" class="project">American Solar Challenge</a></li>
					<li><a href="#" title="Show description and screenshots" class="project no-image">Denver Public Library</a></li>
					<li><a href="#" title="Show description and screenshots" class="project no-image">AIA</a>&nbsp;<abbr title="American Institute of Architects">(?)</abbr></li>
				</ul>
				<section id="contractsFrame" class="box hide"></section>
				</div><!-- // contracts -->			
				<div id="nrel">
					<ul>
						<li><a href="#" title="Show description and screenshots" class="project">JEDI Model Downloads</a></li>
						<li><a href="#" title="Show description and screenshots" class="project">Basic Sciences</a></li>
						<li><a href="#" title="Show description and screenshots" class="project">Thin-Film Partnerships</a></li>
						<li><a href="#" title="Show description and screenshots" class="project">News and Events</a></li>
						<li><a href="#" title="Show description and screenshots" class="project">PV Partnerships</a></li>
					</ul> 
					<section id="nrelFrame" class="box hide"></section> 		
				</div><!-- // nrel -->
				<div id="eere">
				  <ul><!-- !!! pervasive into other tabs? -->
						<li><a href="#" title="Show description and screenshots" class="project">Energy Plus Example File Generator</a></li>
						<li><a href="#" title="Show description and screenshots" class="project">Energy Plus Weather Data</a></li>
						<li><a href="#" title="Show description and screenshots" class="project">Energy Plus Real-Time Weather</a></li>						
						<li><a href="#" title="Show description and screenshots" class="project">Building America</a></li>
						<li><a href="#" title="Show description and screenshots" class="project">Software Tools</a></li>						
					</ul>
				</div><!-- // eere -->
				<section id="eereFrame" class="box hide"></section>
				<div id="source">
				  <ul>
						<li><a href="#" title="Show description and screenshots" class="project no-image">NREL Now</a></li>
						<li><a href="#" title="Show description and screenshots" class="project no-image">Library</a></li>
					</ul>
					<section id="sourceFrame" class="box hide"></section>
				</div><!-- // source -->		
				<div id="doe">
				  <ul>
						<li><a href="#" title="Show description and screenshots" class="project">Hydrogen and Fuel Cells Program</a></li>
					</ul>
					<section id="doeFrame" class="box hide"></section>
				</div><!-- // doe -->						
			</div><!-- // projects -->
		</div><!-- // tabs -->
	</section>    
@endsection

@section('footer')
@endsection

@section('scripts')
<script>
	(function() {
		/*setup tabs*/
		$("#projects").tabs();
		//cache DOM vars
		var project = $(".project"),
				clients = $(".clients"),
				tabs = $("#tabs"),
				box = $(".box"),
				body = $('html, body');
		//client tab clicks
		clients.on('click', function() {
			var tmp = this.innerHTML.replace(/\&.+/g, '').toLowerCase(),
					contentFrame = $(eval(tmp + "Frame"));
			box.empty();
		});
		//project clicks !!!use template for HTML
		project.on('click', function(e) {
			e.preventDefault();
			box.empty();
			var $this = $(this),
					tmp = $(this).closest("div").attr("id"),
					contentFrame = $(eval(tmp + "Frame"));
					title = decodeURI(this.innerHTML),
					data = "",
					filename = title.replace(/\s+/g,'_').toLowerCase(),
					frag = '';
			if ($this.hasClass('no-image')) {
				frag = "'</h3><div id=\"project-desc\">' + data + '</div>'";
			} else {
				frag = "'</h3><div><img src=\"/img/portfolio/'+ filename +'.jpg\" alt=\"Screenshot of '+ title +' project\"/ align=\"right\" class=\"project-img\"></div><div id=\"project-desc\">' + data + '</div>'";
			}
			$.ajax({
				url: '/partials/' + filename + '.html',
				cache: false
				}).done(function(data) {
					contentFrame.html(eval(frag));
					contentFrame.slideDown("slow", function() {
						body.animate({ scrollTop: tabs.offset().top }, 'slow');
					});
				}).error(function(e) {
					contentFrame.html("There has been an error retrieving the project information.");
					contentFrame.slideDown("slow");
			});
		});
	})();
</script>
@endsection
