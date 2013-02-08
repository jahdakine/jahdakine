@layout('layout')

@section('title') New User @endsection

@section('header')		

@endsection

@section('nav')
	@parent
@endsection 

@section('content')
	<h1>Create a new user</h1>

	{{ Form::open('/users') }}
		{{ Form::label('username', 'Username: ') }}
		{{ Form::text('username') }}
		{{ Form::button('submit') }}
	{{ Form::close() }}

@endsection

@section('footer')
	
@endsection