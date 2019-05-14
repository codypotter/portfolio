@extends('layout')

@section('title')
    | {{$project->title}}
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-baseline">
            <h1 class="display-4 d-inline">{{$project->title}}</h1>
            <h1 class="d-inline text-success"> ({{$project->cost == 0 ? 'free!' : '$' . ($project->cost / 100)}})</h1>
        </div>

        <div class="row justify-content-center">
            <h2>{!!$project->isComplete ? '' : 'In Development' !!}</h2>
        </div>

        <div class="row justify-content-center" style="margin-top: 10px;">
            @foreach($project->getSkills() as $skill)
                <img src="/{{$skill->iconPath}}" alt="{{$skill->name}}" style="padding-left: 10px;">
            @endforeach
        </div>

        <p style="margin-top: 25px;">{{$project->description}}</p>

        <div class="row justify-content-center align-items-center">
            <a href="{{$project->productPage}}" class="btn btn-outline-success shadow-sm shadow-hover">Product Page</a>
            <a href="{{$project->codePage}}" class="ml-2 btn btn-outline-success shadow-sm shadow-hover">{{$project->isOpenSource ? 'View on Github' : ''}}</a>
        </div>

        <img class="img-fluid mt-5 mx-auto d-block" src="/{{$project->imgPath}}" alt="{{$project->name}} screenshot">

    </div>
@stop