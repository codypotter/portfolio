@extends('layout')

@section('title')
    | Skills
@endsection

@section('content')
    <ul>
        @foreach ($skills as $skill)
            <li>
                {{$skill->name}}
            </li>
        @endforeach
    </ul>
@endsection