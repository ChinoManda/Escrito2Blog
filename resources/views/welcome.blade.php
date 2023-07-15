<!DOCTYPE html>
<html>
<head>
    <title>El mejor blog del mundo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
        }

        h1 {
            font-size: 30px;
        }

        .custom-btn {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .custom-btn-login {
            background-color: #007bff;
            border: 1px solid #007bff;
        }

        .custom-btn-register {
            background-color: #28a745;
            border: 1px solid #28a745;
        }
        
        .custom-btn-posts {
            background-color: #ffc107;
            border: 1px solid #ffc107;
        }
        
        .custom-btn:hover {
            background-color: #ccc;
            border-color: #ccc;
        }
        
        #image-container {
            margin-top: 20px;
            display: none;
        }
    </style>
    <script>
        function showImage() {
            var imageContainer = document.getElementById('image-container');
            imageContainer.style.display = 'block';
        }
    </script>
</head>
<body>
@include('includes.header')

<h1>Bienvenido al mejor blog del mundo</h1>
<p>Aquí encontrarás contenido increíble y emocionante.</p>

<button class="custom-btn custom-btn-home" onclick="showImage()">Frase del día</button>

<div id="image-container">
    <img src="/bluelabel.jpeg">
</div>

<p>Una vez logueado podrás acceder a los posts</p>

<a href="{{ route('login') }}" class="custom-btn custom-btn-login">Iniciar sesión</a>
<a href="{{ route('register') }}" class="custom-btn custom-btn-register">Registrarse</a>
<a href="{{ route('list') }}" class="custom-btn custom-btn-posts">Ir a los posts</a>

</body>
</html>
