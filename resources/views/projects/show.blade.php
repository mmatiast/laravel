

@extends('layout')
@section('title', 'portfolio |' . $project->title)
@section('content')
{{ $project }}
@endsection