<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Bienvenida</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('gokki.png'); /* Sustituye esta URL por la de tu imagen */
            background-size: cover;
            background-position: center;
        }

        .welcome-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            width: 300px;
        }

        .welcome-container h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .welcome-container p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .logo {
            margin-bottom: 20px;
        }

        .progress-bar {
            background-color: #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            height: 20px;
            width: 100%;
            margin-top: 20px;
        }

        .progress-bar div {
            background-color: #4caf50;
            height: 100%;
            width: 94%; /* El porcentaje según la imagen */
            text-align: right;
            padding-right: 5px;
            color: white;
            line-height: 20px;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <img src="https://via.placeholder.com/150" alt="Logo de la empresa" class="logo"> <!-- Sustituye la URL del logo -->
        <h1>BIENVENIDO</h1>
        <p>Inicio de sesión exitoso</p>
        <div class="progress-bar">
            <div>94%</div>
        </div>
    </div>
</body>
</html>
