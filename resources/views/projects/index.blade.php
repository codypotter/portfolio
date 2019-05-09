@extends('layout')

@section('title')
    | Projects
@endsection
{{--TODO: output each project styled and ordered by release date --}}
@section('content')
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{$project->id}}/edit">{{$project->title}}</a>
            </li>
        @endforeach
    </ul>
    <a href="/projects/create" class="btn btn-outline-primary">Create New Project</a>
@endsection