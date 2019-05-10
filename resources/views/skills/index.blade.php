@extends('layout')

@section('title')
    | Skills
@endsection

@section('content')
    <div class="container">
        @include('partials.skills', compact('skills'))
    </div>
@endsection