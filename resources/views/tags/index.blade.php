@extends('layout')

@section('title')
    | Tags
@stop

@section('content')
    <div class="container">
        @include('partials.tags', compact(['tags', 'projects', 'skills']))
    </div>
@stop