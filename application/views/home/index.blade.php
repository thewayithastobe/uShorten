@layout('master')

@section('container')
	<h1>uBring and then uShorten</h1>
	{{ Form::open('/') }}
		{{ Form::label('url', 'Your Long URL ')}}
		{{ Form::text('url') }}
		{{ Form::submit('shorten') }}
	{{ Form::close() }}
@endsection