@extends('layout')

@section('content')
    <div class="container card-columns">
        @include('partials.experiences', compact('experiences'))
        @include('partials.educations', compact('educations'))
        @include('partials.skills', compact('skills'))
        @include('partials.projects', compact('projects'))
    </div>
@stop


