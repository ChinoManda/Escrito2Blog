<style>
    .form-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
    }

    .form-container label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-container input[type="text"],
    .form-container textarea {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .form-container input[type="checkbox"] {
        margin-top: 5px;
    }

    .form-container button {
        padding: 5px 10px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        color: #333;
        text-decoration: none;
        cursor: pointer;
    }

    .form-container button:hover {
        background-color: #ccc;
    }

    .custom-btn-list {
    background-color: #dc3545;
    border: 1px solid #dc3545;
    }

    .custom-btn-list:hover {
    background-color: #c82333;
    border-color: #c82333;
    }
</style>
@include('includes.header')

<div class="form-container">
    <h1>Crear un nuevo post</h1>

    <form action="/post" method="POST">
        @csrf

        <div>
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="body">Cuerpo:</label>
            <textarea name="body" id="body" rows="5" required></textarea>
        </div>

        <div>
            <label for="publicity">¿Publicidad?</label>
            <input type="checkbox" name="publicity" id="publicity">
        </div>

        <button type="submit">Crear Post</button>
    </form>
</div>
<a href="{{ route('list') }}" class="custom-btn custom-btn-list">Ver lista</a>
