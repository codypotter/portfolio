<div class="card">
    <div class="card-header">
        Skills
    </div>
    <ul class="list-group">
        @foreach ($skills as $skill)
            <li class="list-group-item">
                <a href="/skills/{{$skill->id}}/edit">{{$skill->name}}</a>
            </li>
        @endforeach
        <a class="list-group-item bg-primary text-light text-center" href="/skills/create">
            Add New Skill
        </a>
    </ul>
</div>