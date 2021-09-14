@extends('layout')
@section('title')
Contacto
@endsection 
@section('content')
<h1>contact</h1>
<form method="POST" acction="{{ route('contact') }}">
	@csrf 
	<input name="name" placeholder="nombre...." value="{{ old('name') }}"><br>
	{!! $errors->first('name', '<small>:message</small></br>') !!}

	<input type="text" name="email" placeholder="email..." value="{{ old('email') }}"><br>
	{!! $errors->first('email','<small>:message</small></br>') !!}

	<input name="subject" placeholder="asunto..." value="{{ old('subject') }}"><br>
	{!! $errors->first('subject','<small>:message</small></br>') !!}

	<textarea name="content" placeholder="mensaje....">{{ old('content') }}</textarea><br>
	{!! $errors->first('content','<small>:message</small></br>') !!}
		
	<button>enviar</button><br>
</form>
@endsection 