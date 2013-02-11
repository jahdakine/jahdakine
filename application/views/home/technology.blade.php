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
			browser compatibility, page load times, accessibility, and responsiveness.
			</p>
			<ul class="nolist">
				<li>
					{{ HTML::link("http://yslow.org/", "YSlow&#8663;", array("id"=>"yslow", "title"=>"Open YSlow in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }} 
					<ul>
						<li class="bottom-shim">Lowest score: 81 (grade B)</li>
					</ul>
				</li>
				<li>
					{{ HTML::link("http://validator.w3.org/", "W3C&nbsp;HTML&nbsp;Markup&#8663;", array("id"=>"w3c", "title"=>"Open W3C HTML Markup Validator in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }} 
					<ul>
						<li class="bottom-shim">All pages valid HTML5</li>
					</ul>
				</li>
				<li>
					{{ HTML::link("http://html5.org/", "HTML5&nbsp;Org&#8663;", array("id"=>"html5", "title"=>"Open HTML5 in a new window/tab", "target"=>"_blank", "class"=>"offsite link-new-win")) }}
					<ul>
						<li class="bottom-shim">HTML5 features: CSS3 / Styling, Semantics, and Offline &amp; Storage</li>
					</ul>	
				</li>
			</ul>
		</article>
	</div><!-- // -->
@endsection

@section('footer')	
@endsection

@section('scripts')
@endsection
