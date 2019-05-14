<div class="card">
    <div class="card-header">
        Tags
    </div>
    <div class="body">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Tag Id</th>
                <th scope="col">Project</th>
                <th scope="col">Skill</th>
                <th scope="col">Importance</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <th scope="row"><a href="/tags/{{$tag->id}}/edit">{{$tag->id}}</a></th>
                    <td>{{$projects->find($tag->projectId)->title}}</td>
                    <td>{{$skills->find($tag->skillId)->name}}</td>
                    <td>{{$tag->importance}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="list-group-item bg-primary text-light text-center" href="/tags/create">
            Add New Tag
        </a>
    </div>

</div>