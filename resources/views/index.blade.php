@extends('layout')

@section('content')
    <div class="container">
        <section class="row justify-content-center">
            <div>
                <img src="{{asset('img/cody.svg')}}" alt="Cody" class="d-inline img-fluid" height="150px" width="150px">
            </div>
            <div style="padding-left:10px;">
                <h1 class="display-4">Hello, my name is Cody.</h1>
                <p class="lead">{{$cody ? $cody->motto : 'I\'m a full stack engineer at Gearbox'}}</p>
            </div>
        </section>
        <section class="row">
            <div class="col">
                @include('partials.projects_overview', compact(['projects', 'skills', 'tags']))
            </div>
        </section>
    </div>
@stop
