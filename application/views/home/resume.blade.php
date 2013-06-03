@layout('layout')

@section('title')
	Resum&#233;
@endsection

@section('header')
{{ HTML::style('css/resume.css') }} 
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
		<div id="accordion">
			<div class="group">
				<h3 class="accord-link" title="Reveal/Hide contents">SUMMARY</h3>
					<div>
						<p>
							Seeking a full-stack web/database developer position in a design environment with the opportunity for creative, challenging work. 
							Would enjoy developing on a team with new technologies, in a positive learning atmosphere, to create innovative software products geared to the web.
						</p>
						<ul>
							<li>15 years application programming</li>
							<li>12 years database maintenance and development, software design and testing</li>
						</ul>
					</div>
			</div><!-- group -->
			<div class="group">
				<h3 class="accord-link" title="Reveal/Hide contents">EXPERIENCE</h3>
				<div>
					<h4>Freelancer/PHP Web Developer</h4>
					<h5>Gnerdl/Portfolio/VivianLongArt/Various</h5>
					<h6>May 2012 – Present</h6>
					<p>Retooled from ColdFusion to Open Source PHP/CSS3/HTML5/jQuery/MAMP stack.</p>
					<ul>
						<li>jahdakine.pagodabox.com – My portfolio site complete with API carousel integrating some of my favorite social networks, a showcase for previous work, a resume download feature, and a contact facility with spam blocker integration. Used PHP Laravel (MVC), jQuery, HTML5 local storage, and CSS3/Bootstrap to put forth a modern, responsive interface that complies with W3C standards and is accessible and configurable.</li>
						<li>Gnerdl.com – A concept site helping gamers connect with other gamers and interests based on a standardized persona across multiple platforms. Modeled user stories and analyzed requirements for site launch. Created mockups and entity relationship drawings diagramming site flow and interfaces. Utilized database design, requirements gathering/analysis, prototyping, and object modeling skills. Still in alpha and not incorporated into current public listing.</li>
						<li>VivainLongArt.com – Artist Studio Presentation site redesign. Presented artist's works using responsive layouts and customized image plugins, and custom search feature. Still in alpha and not incorporated into current public listing. </li>
						<li>Training tools – Solved a problem with scattered codebases relating to coursework by writing a utility that takes course syllabuses and creates directory structures based on PHP environment. </li>
					</ul>
					<h4>IT Professional IV - Database Application Specialist</h4>
					<h5>NREL - National Renewable Energy Laboratory</h5>
					<h6>June 2000 – April 2012 (11 years 11 months) Golden, Colorado</h6>
					<ul>
						<li>Analyzed requirements</li>
						<li>Built and designed databases</li>
						<li>Programmed business logic</li>
						<li>Tested and deployed applications</li>
					</ul>
					<p>
						Responsible for creation, deployment, testing, maintenance, security, documentation, and consulting on database driven web-sites internal to the laboratory as well as for outside clients (DOE, Treasury, AIA, and others). Used ColdFusion, pHp, MySQL, SQL Server, JavaScript, jQuery, IBM Appscan and other common tools. Produced many content management systems, custom applications, and devised archival systems automating jobs that otherwise required many hours manually. Leader Database Application Security team, member of the Database Standards sub-team, mentor to new ColdFusion and database programmers.
					</p>
					<h4>Software Engineer/Database Developer</h4>
					<h5>Pd' Programming, Inc.</h5>
					<h6>April 1999 – May 2000 (1 year 2 months) Lafayette, Colorado</h6>
					<p>
						Maintained all aspects of software licensing, support, and beta testing for commercial traffic engineering/analysis software system. Implemented custom contacts database (MSAccess/VBA) and web front-end (ColdFusion), data entry system interface to traffic records software, and generic "web-SQL" table manipulation tool for online back-end dB administration.
					</p>
					<h4>Programmer/Analyst II</h4>
					<h5>Access Graphics</h5>
					<h6>July 1998 – April 1999 (10 months) Boulder, Colorado</h6>
					<p>
						Responsible for maintaining database consistency for mission critical Oracle RDBMS order entry system. Worked with a team of developers to support design, testing, and production environments. Developed import, processing, and test code using common tools on a UNIX platform.
					</p>
				</div>
			</div><!-- group -->
			<div class="group">
				<h3 class="accord-link" title="Reveal contents/Hide">SKILLS &amp; EXPERTISE</h3>
				<div>
					<ul>
						<li>Web Applications</li>
						<li>PHP</li>
						<li>MAMP</li>
						<li>MySQL/SQL Server/Postgres</li>
						<li>HTML4.01/XHTML/HTML5</li>
						<li>CSS/CSS3</li>
						<li>JavaScript/jQuery</li>
						<li>ColdFusion</li>
						<li>Unix Shell</li>
					</ul>
				</div>
			</div><!-- group -->
			<div class="group">
				<h3 class="accord-link" title="Reveal contents/Hide">EDUCATION</h3>
				<div>
					<h4>Institutional</h4>
					<ul>
						<li>Regis University: BS-CIS, Computer Information Systems: 1995 – 1997 (Magna Cum Laude)</li>
					</ul>
					<h4>Independent Coursework</h4>
					<p>Continuous professional development utilizing online coursework</p>
					<ul>
						<li>NetTuts</li>
						<li>Lynda</li>
						<li>CodeCademy</li>
						<li>Udemy</li>
						<li>CodeSchool</li>
					</ul>					
					<h4>Certifications</h4>
					<ul>
						<li>SANS Defending Web Applications Security Essentials</li>
						<li>Oracle SQL/PL-SQL</li>
						<li>Oracle Programming Design Units </li>
					</ul>
				</div>
			</div><!-- group -->
			<div class="group">
				<h3 class="accord-link" title="Reveal contents/Hide">HONORS &amp; AWARDS</h3>
				<div>
					<p>
						Regis University - Magna Cum Laude 1997
					</p>
					<p>
						NREL - President's Award 2010
					</p>
				</div>
			</div>
			<div class="group">
				<h3 class="accord-link" title="Reveal contents/Hide">RECOMMENDATIONS/REFERENCES</h3>
				<div>
					<h4>Erik Ness</h4>
					<h5>Senior Project Leader at National Renewable Energy Laboratory</h5>
		    	<p>
		    		John is one of the best database programmers I have worked with. He single-handedly developed the original database application for the Treasury 1603 Program (part of the American Recovery Act) when I was managing the review systems for that program. John worked tirelessly to deliver a smooth-running application under impossible deadlines.
		    	</p>
					<p>
						February 17, 2013, Erik managed John indirectly at NREL - National Renewable Energy Laboratory (LinkedIn)
					</p>
					<h4>Steven Reiser</h4>
					<h5>Sr. ColdFusion &amp; Database Programmer at DOE-National Renewable Energy Lab (via Alliegence-Compri Consulting)</h5>
			    <p>
			    	John and I worked on ColdFusion Applications at the National Renewable Energy Laboratory where he has been for over 10 years managing dozens of ColdFusion Web Applications. I took over a project where John went far beyond expectations performing the work load of a web team on his own, working a lot of overtime to create a Application form for Renewable Energy grants, a review system and an annual Performance Review System as the sole developer. We now have a larger team on the project which stands on the shoulders of John's initial work. I enjoyed working with John and we had a knack for proposing the same solutions to issues we noticed in the software creating an excellent rapport. John works hard and with focus and enthusiasm taking pride in creating quality web applications. I highly recommend John and hope to work with him again on other projects.
			    </p>
					<p>
						October 22, 2011, Steven worked directly with John at NREL - National Renewable Energy Laboratory (LinkedIn)
					</p>
					<h4>Pete d'Oronzio</h4>
					<h5>Contractor at Digital Foundry</h5>
					<p>
						John worked for Pd' Programming for a little over a year. John is very sharp and quick to catch on to whatever task is at hand. He is able to see the big picture. He's also very meticulous in his work. As a small business owner, I need my employees to wear more than one hat. He was able to do that. John's a smart guy and understands the context he's working in.
		        Unfortunately, the timing of John's employment at Pd' Programming was poor and I wasn't able to keep him on. By the time things had picked up, he'd landed a nice spot at NREL.
		        A company in need of the skills John has would do very well to grab him if he's available.
		      </p>
					<p>
						October 25, 2011, Pete managed John at Pd' Programming, Inc. (LinkedIn)
					</p>
				</div>
			</div><!-- group -->
		</div><!-- Accordian -->
	</section>    
@endsection

@section('footer')
@endsection

@section('scripts')
	{{ HTML::script('js/resume.funcs.js') }}
@endsection
