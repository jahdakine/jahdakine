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

			-YSlow from the Yahoo! Developer Network.
				Average grade B
			-W3C CSS http://jigsaw.w3.org/css-validator/ and Markup http://validator.w3.org/ validation services
				All pages valid html5 and CSS3 markup
			HTML5 
				!!!microtags, drag and drop, media queries, and polyfills employed


		</article>
	</div><!-- // -->

@endsection

@section('footer')	
@endsection

@section('scripts')
@endsection
