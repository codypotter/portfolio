@extends('layout')

@section('title')
    | Edit Education
@stop

@section('content')
    <div class="container">
        <form class="d-inline" action="/education/{{$education->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Achievement</label>
                <input type="text" class="form-control" name="achievement" id="achievement" value="{{$education->achievement}}" required>
            </div>
            <div class="form-group">
                <label for="institution">Institution</label>
                <input type="text" class="form-control" name="institution" id="institution" value="{{$education->institution}}" required>
            </div>
            <div class="form-group">
                <label for="cityState">City, State</label>
                <input type="text" class="form-control" name="cityState" id="cityState" value="{{$education->cityState}}" required>
            </div>
            <div class="form-group">
                <label for="major">Major</label>
                <input type="text" class="form-control" name="major" id="major" value="{{$education->major}}" >
            </div>
            <div class="form-group">
                <label for="gpa">GPA</label>
                <input type="number" class="form-control" name="gpa" id="gpa" value="{{$education->gpa}}" required >
            </div>
            <div class="form-group">
                <label for="gradDate">Graduation Date</label>
                <input type="date" class="form-control" name="gradDate" id="gradDate" value="{{$education->gradDate}}" required >
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <form class="d-inline" action="/education/{{$education->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
    </div>
@stop