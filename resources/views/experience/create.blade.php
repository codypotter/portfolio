@extends('layout')

@section('title')
    | Create Experience
@endsection

@section('content')
    <form action="/experience" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" required>
        </div>
        <div class="form-group">
            <label for="description">Responsibilities</label>
            <textarea class="form-control" name="responsibilities" id="responsibilities" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="role">Company</label>
            <input type="text" class="form-control" name="company" id="company" required>
        </div>
        <div class="form-group">
            <input type="hidden" name="isCurrent" value="0">
            <input type="checkbox" class="form-check-input" name="isCurrent" id="isCurrent" value="1">
            <label class="form-check-label" for="isCurrent">Current</label>
        </div>
        <div class="form-group">
            <label for="releaseDate">Start Date</label>
            <input type="date" class="form-control" name="startDate" id="startDate" required>
        </div>
        <div class="form-group">
            <label for="releaseDate">End Date</label>
            <input type="date" class="form-control" name="endDate" id="endDate" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection