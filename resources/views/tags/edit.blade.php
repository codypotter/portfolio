@extends('layout')

@section('title')
    | Edit Tag
@stop

@section('content')
    <div class="container">
        <form class="d-inline" action="/tags/{{$tag->id}}/edit" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="projectId">Project</label>
                <select name="projectId" id="projectId" class="form-control" required>
                    @foreach($projects as $project)
                        <option value="{{$project->id}}" {{$tag->projectId == $project->id ? "selected" : ""}}>{{$project->title}}</option>
                    @endforeach
                </select>

                <label for="skillId">Skill</label>
                <select name="skillId" id="skillId" class="form-control" required>
                    @foreach($skills as $skill)
                        <option value="{{$skill->id}}" {{$tag->skillId == $skill->id ? "selected" : ""}}>{{$skill->name}}</option>
                    @endforeach
                </select>
                <label for="importance">Importance</label>
                <input type="number" class="form-control" name="importance" id="importance" value="{{$tag->importance}}">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <form class="d-inline" action="/tags/{{$tag->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
    </div>
@stop