@extends('layout')

@section('title')
    | Experience
@endsection

@section('content')
    <div class="container">
        @include('partials.experiences', compact('experiences'))
    </div>
@endsection