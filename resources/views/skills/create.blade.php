@extends('layout')
@section('title')
    | Create Skill
@endsection

@section('content')
    <div class="container">
        <form action="/skills" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" name="name" id="name" >
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="isTechnology" id="isTechnology" value="1">
                <label class="form-check-label" for="isTechnology">Technology</label>
            </div>
            <div class="form-group">
                <label for="proficiency">Proficiency</label>
                <input type="number" class="form-control" name="proficiency" id="proficiency" max="100" min="1" >
            </div>
            <div class="form-group">
                <label for="iconPath">Icon Path</label>
                <input type="text" class="form-control" name="iconPath" id="iconPath" placeholder="img/icon.png">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection