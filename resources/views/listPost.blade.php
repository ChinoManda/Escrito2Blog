<style>
    .post-list {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .post-item {
        margin-bottom: 20px;
        border: 1px solid #ccc;
        padding: 10px;
        background-color: #f9f9f9;
    }

    .post-title {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .post-author {
        color: #666;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination .page-item {
        margin: 0 5px;
        list-style-type: none;
    }

    .pagination .page-item .page-link {
        padding: 5px 10px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        color: #333;
        text-decoration: none;
    }

    .pagination .page-item .page-link:hover {
        background-color: #ccc;
    }

    .pagination .page-item.active .page-link {
        background-color: #333;
        color: #fff;
    }

    .button {
        display: inline-block;
        padding: 5px 10px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        color: #333;
        text-decoration: none;
    }

    .button:hover {
        background-color: #ccc;
    }

</style>
@include('includes.header')

<h1>Lista de Posts</h1>

<ul class="post-list">
    @foreach ($post as $pos)
        <li class="post-item">
            <div class="post-title">Título:</div>
            <div>{{ $pos->title }}</div>
            <div class="post-title">Contenido:</div>
            <div>{{ $pos->body }}</div>
            <div class="post-title">Autor:</div>
            <div class="post-author">{{ $pos->author }}</div>
        </li>
    @endforeach
</ul>
<a href="/post" class="button">Crear un post</a>
<div class="pagination">
{{ $post->links() }}
</div>
