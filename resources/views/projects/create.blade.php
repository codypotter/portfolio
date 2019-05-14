@extends('layout')
@section('title')
    | Create Project
@endsection

@section('content')
    <div class="container">
        <form action="/projects" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" >
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="4" ></textarea>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" class="form-control" name="role" id="role" >
            </div>
            <div class="form-group">
                <label for="productPage">Product Page</label>
                <input type="url" class="form-control" name="productPage" id="productPage" >
            </div>
            <div class="form-group">
                <label for="codePage">Code Page</label>
                <input type="url" class="form-control" name="codePage" id="codePage" >
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="isComplete" id="isComplete" value="1">
                <label class="form-check-label" for="isComplete">Completed</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="isOpenSource" id="isOpenSource" value="1">
                <label class="form-check-label" for="isOpenSource">Open Source</label>
            </div>
            <div class="form-group">
                <label for="releaseDate">Release Date</label>
                <input type="date" class="form-control" name="releaseDate" id="releaseDate" >
            </div>
            <div class="form-group">
                <label for="cost">Cost</label>
                <input type="number" class="form-control" name="cost" id="cost" >
            </div>
            <div class="form-group">
                <label for="imgPath">Image Path</label>
                <input type="text" class="form-control" name="imgPath" id="imgPath" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection