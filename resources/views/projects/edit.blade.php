@extends('layout')
@section('title')
    | Create Project
@endsection

@section('content')
    <form action="/projects/{{$project->id}}" method="POST">
        {{csrf_field()}}
        @method('PATCH')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4" >{{$project->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" class="form-control" name="role" id="role" value="{{$project->role}}">
        </div>
        <div class="form-group">
            <label for="productPage">Product Page</label>
            <input type="url" class="form-control" name="productPage" id="productPage" value="{{$project->productPage}}" >
        </div>
        <div class="form-group">
            <label for="codePage">Code Page</label>
            <input type="url" class="form-control" name="codePage" id="codePage" value="{{$project->codePage}}">
        </div>
        <div class="form-group">
            <input type="hidden" value="0" name="isComplete" >
            <input type="checkbox" class="form-check-input" name="isComplete" id="isComplete" value="1" {{$project->isComplete ? 'checked' : ''}}>
            <label class="form-check-label" for="isComplete">Completed</label>
        </div>
        <div class="form-group">
            <input type="hidden" value="0" name="isOpenSource" >
            <input type="checkbox" class="form-check-input" name="isOpenSource" id="isOpenSource" value="1" {{$project->isOpenSource ? 'checked' : ''}}>
            <label class="form-check-label" for="isOpenSource">Open Source</label>
        </div>
        <div class="form-group">
            <label for="releaseDate">Release Date</label>
            <input type="date" class="form-control" name="releaseDate" id="releaseDate" value="{{$project->releaseDate}}" >
        </div>
        <div class="form-group">
            <label for="cost">Cost</label>
            <input type="number" class="form-control" name="cost" id="cost" value="{{$project->cost}}" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <form action="/projects/{{$project->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger">Delete Project</button>
    </form>
@endsection