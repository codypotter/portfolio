@extends('layout')

@section('title')
    | Experience
@endsection

@section('content')
    <ul>
        @foreach($experiences as $experience)
            <li>{{$experience->title}}</li>
        @endforEach
    </ul>
@endsection