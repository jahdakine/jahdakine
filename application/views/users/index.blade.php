@layout('layout')

@section('title')
	User
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

