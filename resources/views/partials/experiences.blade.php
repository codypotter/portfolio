<div class="card">
    <div class="card-header">
        Experience
    </div>
    <ul class="list-group">
        @foreach ($experiences as $experience)
            <li class="list-group-item">
                 <a href="/experience/{{$experience->id}}/edit">{{$experience->title}}</a>
            </li>
        @endforeach
        <a class="list-group-item bg-primary text-light text-center" href="/experience/create">
             Add New Experience
        </a>
    </ul>
</div>