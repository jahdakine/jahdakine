@layout('layout')

@section('title')
	Project
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
		@include('home._project')	
	</section>    
@endsection

@section('footer')
@endsection

@section('scripts')
@endsection
