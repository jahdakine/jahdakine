@layout('layout')

@section('title') Technology @endsection

@section('header')
	{{ HTML::style('css/technology.css') }}
@endsection

@section('nav')
	@parent
@endsection 

@section('top')
@endsection

@section('main')
	@section('aside')
	@endsection	
	<div>
		<article>
			<p>
				I have made every effort to create a smooth experience during your site visit. Here are some of the metrics and tools I've used to test various aspects of 
				browser compatibility, page load times, accessibility, and responsiveness. This site is designed for a modern browser audience and works best with the latest Firefox, Safari, and Chrome browsers. 
				It is not recommended for Internet Explorer at this time, but I am working on the issues. This is a free hosted environment and therefore the site is limited to 200 MB of RAM per instance
				and 1 gigabyte of output for outbound data transfers. 
			</p>
			<ul class="nolist">
				<li>
					{{ HTML::link("http://yslow.org/", "YSlow&#8663;", array("id"=>"yslow", "title"=>"Open YSlow in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }} 
					<ul>
						<li class="bottom-shim">Score: 90 (A grade)</li>
					</ul>
				</li>
				<li>
					{{ HTML::link("http://validator.w3.org/", "W3C&nbsp;HTML&nbsp;Markup&#8663;", array("id"=>"w3c", "title"=>"Open W3C HTML Markup Validator in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win href")) }} 
					<ul>
						<li class="bottom-shim">All pages valid HTML5</li>
					</ul>
				</li>
				<li>
					{{ HTML::link("http://html5.org/", "HTML5&nbsp;Org&#8663;", array("id"=>"html5", "title"=>"Open HTML5 in a new window/tab", "target"=>"_blank", "class"=>"offsite link-new-win href")) }}
					<ul>
						<li class="bottom-shim">HTML5 features: CSS3 / Styling, Semantics, and Offline &amp; Storage</li>
					</ul>	
				</li>
				<li>
					{{ HTML::link("http://wave.webaim.org/", "Wave&nbsp;Org&#8663;", array("id"=>"wave", "title"=>"Open WAVE Accessibility Evaluation Tool in a new window/tab", "target"=>"_blank", "class"=>"offsite link-new-win href")) }}
					<ul>
						<li class="bottom-shim">Section 503: No errors or alerts</li>
					</ul>	
				</li>
				<li>
					{{ HTML::link("http://www.browserstack.com/", "BrowserStack&#8663;", array("id"=>"bstack", "title"=>"Open BrowserStack Testing Tool in a new window/tab", "target"=>"_blank", "class"=>"offsite link-new-win href")) }}
					<ul>
						<li class="bottom-shim">Compatible browsers:</li>
					</ul>	
				</li>		
			  <li class="nolist">
			  	<div class="border">
					<table>
						<caption class="heading"><span class="tool" id="wxp"></span>Windows XP</caption>
						<thead>
							<tr>
								<th scope="col"><span class="tool ff"></span>Firefox</th><th scope="col"><span class="tool saf"></span>Safari</th><th scope="col"><span class="tool chr"></span>Chrome</th><th scope="col"><span class="tool ie"></span>IE</th><th scope="col"><span class="tool op"></span>Opera</th>
							</tr>
						</thead>						
						<tbody>
							<tr>
								<td>14-18</td><td>4*,5.1</td><td>All*</td><td><span class="inop">6-8</span></td><td>11-12.11*</td>
							</tr>
						</tbody>
					</table>
					<table>
						<caption class="heading"><span class="tool" id="w7"></span>Windows 7</caption>							
						<thead>
							<tr>
								<th scope="col"><span class="tool ff"></span>Firefox</th><th scope="col"><span class="tool saf"></span>Safari</th><th scope="col"><span class="tool chr"></span>Chrome</th><th scope="col"><span class="tool ie"></span>IE</th><th scope="col"><span class="tool op"></span>Opera</th>
							</tr>
						</thead>						
						<tbody>							
							<tr>
								<td>15-18</td><td>4*,5.1</td><td>All*</td><td><span class="inop">8,9</span></td><td>10-11.6*,12.1,12.11</td>
							</tr>							
						</tbody>
					</table>
					<table>
						<caption class="heading"><span class="tool" id="w8"></span>Windows 8</caption>
						<thead>													
							<tr>
								<th scope="col"><span class="tool ff"></span>Firefox</th><th scope="col"><span class="tool saf"></span>Safari</th><th scope="col"><span class="tool chr"></span>Chrome</th><th scope="col"><span class="tool ie"></span>IE</th><th scope="col"><span class="tool op"></span>Opera</th>
							</tr>
						</thead>						
						<tbody>							
							<tr>
								<td>16-19</td><td>5.1</td><td>22*</td><td><span class="inop">10</span></td><td><span class="inop">12,12.1</span></td>
							</tr>
						</tbody>
					</table>
					<table>							
						<caption class="heading"><span class="tool mac"></span>Mac OSX Snow Leopard</caption>
						<thead>
							<tr>
								<th scope="col"><span class="tool ff"></span>Firefox</th><th scope="col"><span class="tool saf"></span>Safari</th><th scope="col"><span class="tool chr"></span>Chrome</th><th><span class="tool iem"></span>IE:Mac</th><th scope="col"><span class="tool op"></span>Opera</th>
							</tr>
						</thead>						
						<tbody>									
							<tr>
								<td>19</td><td>4-5.1*</td><td><span class="inop">25</span></td><td>?</td><td>?</td>
							</tr>		
						</tbody>
					</table>
					<table>							
						<caption class="heading"><span class="tool mac"></span>Mac OSX Lion</caption>
						<thead>
							<tr>
								<th scope="col"><span class="tool ff"></span>Firefox</th><th scope="col"><span class="tool saf"></span>Safari</th><th scope="col"><span class="tool chr"></span>Chrome</th><th><span class="tool iem"></span>IE:Mac</th><th scope="col"><span class="tool op"></span>Opera</th>
							</tr>
						</thead>						
						<tbody>
							<tr>
								<td>19</td><td>6*</td><td>25*</td><td>?</td><td>12.5*</td>								
							</tr>					
						</tbody>
					</table>
					<table>							
						<caption class="heading"><span class="tool mac"></span>Mac OSX Mountain Lion</caption>
						<thead>				
							<tr>
								<th scope="col"><span class="tool ff"></span>Firefox</th><th scope="col"><span class="tool saf"></span>Safari</th><th scope="col"><span class="tool chr"></span>Chrome</th><th><span class="tool iem"></span>IE:Mac</th><th scope="col"><span class="tool op"></span>Opera</th>
							</tr>
						</thead>						
						<tbody>									
							<tr>
								<td>?</td><td>?</td><td>?</td><td>?</td><td>?</td>
							</tr>																						
							</tbody>
					</table>
					<p>Key: *minor acceptable issue(s), <span class="inop">inoperable</span>, choose another browser or version. ? not tested.</p>
				</div>
				</li>
			</ul>
		</article>
	</div><!-- // -->
@endsection

@section('footer')	
@endsection

@section('scripts')
@endsection
