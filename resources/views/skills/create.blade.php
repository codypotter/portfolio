@extends('layout')
@section('title')
    | Create Skill
@endsection

@section('content')
    <form action="/skills" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" name="name" id="name" >
        </div>
        <div class="form-group">
            <input type="checkbox" class="form-check-input" name="isTechnology" id="isTechnology" value="1">
            <label class="form-check-label" for="isTechnology">Technology</label>
        </div>
        <div class="form-group">
            <label for="proficiency">Proficiency</label>
            <input type="number" class="form-control" name="proficiency" id="proficiency" max="100" min="1" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection