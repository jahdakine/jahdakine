@layout('layout')

@section('title') Technology @endsection

@section('header')		
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
			I have made every effort to create a smooth experience during your site visit. Here are some of the metrics and tools I've used to test various aspects of 
			browser compatibility, page load times, accessibility, and responsiveness.
			<ul>
				<li>{{ HTML::link("http://yslow.org/", "YSlow&#8663;", array("title"=>"Open YSlow in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }} from the Yahoo! Developer Network.</li>
				<li>
					{{ HTML::link("http://jigsaw.w3.org/css-validator/", "W3C CSS&#8663;", array("title"=>"Open W3C CSS validator in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }} 
					and {{ HTML::link("http://validator.w3.org/", "HTML Markup&#8663;", array("title"=>"Open W3C HTML validator in a new window/tab", "target"=>"_blank", "class" => "offsite link-new-win")) }} validation services.
				</li>
				<li>HTML5 microtags, media queries, and polyfills employed.</li>
			</ul>
		</article>
	</div><!-- // -->

@endsection

@section('footer')	
@endsection

@section('scripts')
@endsection
