@extends('layout')

@section('title')
    | Education
@endsection

@section('content')
    <div class="container">
        @include('partials.educations', compact('educations'))
    </div>
@endsection