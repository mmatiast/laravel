@extends('layout')
@section('title', 'Crear proyecto')

@section('content')
<h1>Crear nuevo poryecto</h1>

  @include('partials.validation-errors')

 <form method="POST" action="{{ route('projects.store')}}">
  @include('projects.form', ['btnText'=> 'Guardar'])
 	
 </form>
@endsection 