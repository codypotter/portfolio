<div class="card">
    <div class="card-header">
        Education
    </div>
    <ul class="list-group">
        @foreach ($educations as $education)
            <li class="list-group-item">
                <a href="/education/{{$education->id}}/edit">{{$education->achievement}}</a>
            </li>
        @endforeach
        <a class="list-group-item bg-primary text-light text-center" href="/education/create">
            Add New Education
        </a>
    </ul>
</div>