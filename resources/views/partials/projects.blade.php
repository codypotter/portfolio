<div class="card">
    <div class="card-header">
        Projects
    </div>
    <ul class="list-group">
        @foreach ($projects as $project)
            <li class="list-group-item">
                <a href="/projects/{{$project->id}}/edit">{{$project->title}}</a>
            </li>
        @endforeach
        <a class="list-group-item bg-primary text-light text-center" href="/projects/create">
            Add New Project
        </a>
    </ul>
</div>