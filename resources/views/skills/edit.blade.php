@extends('layout')
@section('title')
    | Edit Skill
@endsection

@section('content')
    <div class="container">
        <form class="d-inline" action="/skills/{{$skill->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$skill->name}}">
            </div>
            <div class="form-check">
                <input type="hidden" value="0" name="isTechnology" >
                <input type="checkbox" class="form-check-input" name="isTechnology" id="isTechnology" value="1" {{$skill->isTechnology ? "checked" : ""}}>
                <label class="form-check-label" for="isTechnology">Technology</label>
            </div>
            <div class="form-group">
                <label for="proficiency">Proficiency</label>
                <input type="number" class="form-control" name="proficiency" id="proficiency" max="100" min="1" value="{{$skill->proficiency}}">
            </div>
            <div class="form-group">
                <label for="iconPath">Icon Link</label>
                <input type="text" class="form-control" name="iconPath" id="iconPath" value="{{$skill->iconPath}}">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <form class="d-inline" action="/skills/{{$skill->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
    </div>
@endsection