@extends('layout')

@section('title')
    | Create Education
@stop

@section('content')
    <form action="/education" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Achievement</label>
            <input type="text" class="form-control" name="achievement" id="achievement" required>
        </div>
        <div class="form-group">
            <label for="institution">Institution</label>
            <input type="text" class="form-control" name="institution" id="institution" required>
        </div>
        <div class="form-group">
            <label for="major">Major</label>
            <input type="text" class="form-control" name="major" id="major" >
        </div>
        <div class="form-group">
            <label for="gpa">GPA</label>
            <input type="number" class="form-control" name="gpa" id="gpa" required>
        </div>
        <div class="form-group">
            <label for="gradDate">Graduation Date</label>
            <input type="date" class="form-control" name="gradDate" id="gradDate" >
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@stop