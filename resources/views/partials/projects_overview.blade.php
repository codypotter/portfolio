<div class="card-columns">
    @foreach ($projects as $project)
        <a href="/projects/{{$project->id}}">
            @include('partials.project', ['project' => $project, 'skills' => $project->getSkills()])
        </a>
    @endforeach
</div>