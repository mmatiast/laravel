@extends('layout')
@section('title', 'Crear proyecto')

@section('content')
<h1>Crear nuevo poryecto</h1>

 <form method="POST" action="{{ route('projects.store')}}">
 	@csrf 
 	<label>
 		Titulo del proyecto <br>
 		<input type="text" name="title">
 	</label>
 	<br>
 	<label>
 		Url del proyecto <br>
 		<input type="text"  name="url">
 	</label>
 	<br>
 	<label>
 		Descripcion del proyecto <br>
 		<textarea name="description"></textarea>
 	</label> 
 	<br>
 	<button>Guardar</button>

 	
 	
 </form>
@endsection 