@extends('layout')

@section('title')
    | Create Tag
@stop

@section('content')
    <form action="/tags" method="POST">
        @csrf
        <div class="form-group">
            <label for="projectId">Project</label>
            <select name="projectId" id="projectId" class="form-control" required>
                <option disabled hidden selected value></option>
                @foreach($projects as $project)
                    <option value="{{$project->id}}">{{$project->title}}</option>
                @endforeach
            </select>

            <label for="skillId">Skill</label>
            <select name="skillId" id="skillId" class="form-control" required>
                <option disabled hidden selected value></option>
                @foreach($skills as $skill)
                    <option value="{{$skill->id}}">{{$skill->name}}</option>
                @endforeach
            </select>
            <label for="importance">Importance</label>
            <input type="number" class="form-control" name="importance" id="importance" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop