

@extends('layouts.master')

@section('content')
{{ Form::open(array('url' => '/login')) }}
	<ul>
Hello User Form.

<div class='.form-control'>
	<br>{{Form::label('username', 'username');}}
	<br>{{ Form::text('username', 'username')}}

	<br>{{Form::label('email', 'E-Mail Address');}}
	<br>{{Form::text('email', 'email');}}


	<br>{{Form::label('password', 'password');}}
	<br>{{Form::password('password');}}
<div>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}
@stop
