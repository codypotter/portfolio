@extends('layout')

@section('title')
    | Projects
@endsection
@section('content')
    <div class="container">
        @include('partials.projects', compact('projects'))
    </div>
@endsection