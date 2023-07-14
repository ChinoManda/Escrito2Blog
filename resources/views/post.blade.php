<h1>Lista de Posts</h1>

<ul>
    @foreach ($posts as $pos)
        <li>{{ $pos->title }}</li>
        <li>{{ $pos->body }}</li>
        <li>{{ $pos->author }}</li>
    @endforeach
</ul>
