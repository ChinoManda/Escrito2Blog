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

        .btn {
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

        .btn-login {
            background-image: linear-gradient(to right, #007bff, #6c757d);
        }

        .btn-register {
            background-image: linear-gradient(to right, #28a745, #ffc107);
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
    <h1>Bienvenido al mejor blog del mundo</h1>
    <p>Aquí encontrarás contenido increíble y emocionante.</p>

    <button class="btn" onclick="showImage()">Frase del dia</button>

    <div id="image-container">
        <img src="/bluelabel.jpeg">
    </div>
    </style>
</head>
<body>
    <h1>Bienvenido al mejor blog del mundo</h1>
    <p>Una vez logueado podras acceder a los posts</p>

    <a href="{{ route('login') }}" class="btn btn-login">Iniciar sesión</a>
    <a href="{{ route('register') }}" class="btn btn-register">Registrarse</a>
</body>
</html>
