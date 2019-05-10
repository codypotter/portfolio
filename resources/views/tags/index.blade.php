@extends('layout')

@section('title')
    | Tags
@stop

@section('content')
    <a href="/tags/create" class="btn btn-primary" >Create New Tag</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tag Id</th>
                <th scope="col">Project</th>
                <th scope="col">Skill</th>
                <th scope="col">Importance</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <th scope="row"><a href="/tags/{{$tag->id}}/edit">{{$tag->id}}</a></th>
                    <td>{{$projects->find($tag->projectId)->title}}</td>
                    <td>{{$skills->find($tag->skillId)->name}}</td>
                    <td>{{$tag->importance}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop