@layout('layout')

@section('title')
	Tasks
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
		<?php echo render('home._tasks'); ?>
	</section>    
@endsection

@section('footer')
@endsection

@section('scripts')
	{{ HTML::script('js/portfolio.funcs.js') }}
@endsection
