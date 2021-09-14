@extends('layout')
@section('title')
Portafolio
@endsection 
@section('content')
<h1>Portfolio</h1>
<ul>
	@forelse($portfolio as $portfolioItem)
		<li>{{$portfolioItem['title']}}</li>
	@empty
	<li>no hay elemento para mostsa</li>
	@endforelse
</ul>	
@endsection 