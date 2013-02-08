@layout('layout')

@section('title')
	Sign on
@endsection
@section('header')

@endsection

@section('nav')
	@parent
	<li>{{ HTML::link("users/", "Sign off") }}</li>
@endsection

@section('content')

@endsection

@section('footer')

@endsection

