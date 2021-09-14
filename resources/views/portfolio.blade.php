@extends('layout')
@section('title')
Portafolio
@endsection 
@section('content')
<h1>Portfolio</h1>
<ul>
	@forelse($projects as $project)
	<li><a href="{{ route('portfolio.show', $project) }}">{{$project->title}}<a/></li>
	@empty
	<li>No hay elementos que mostrar</li>
	@endforelse
  {{ $projects->links() }}

</ul>	
@endsection 