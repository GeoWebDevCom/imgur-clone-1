@extends('layouts.master')

@section('content')
{{ Form::open(array('url' => '/signup')) }}
	<ul>
Hello User Form.

<div class='.form-control'>
	<br>{{Form::label('username');}}
	<br>{{ Form::text('username')}}




	<br>{{Form::label('password');}}
	<br>{{Form::password('password');}}
<div>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
@stop
