<div class="card shadow-hover shadow-sm" id="{{$project->id}}">
    <img src="{{asset($project->imgPath)}}" class="card-img-top" alt="{{$project->title}}">
    <div class="card-body">
        <h4 class="card-title">{{$project->title}}</h4>
        <p class="card-text">{{$project->description}}</p>

        @foreach($skills as $skill)
            <span class="badge badge-pill badge-primary">{{$skill->name}}</span>
        @endforeach
    </div>
</div>