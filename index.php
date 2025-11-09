<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prácticas U2 - Inicio</title>
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body {
            background-color: #F4F6F8;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contenedor {
            background-color: #FFFFFF;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        h1 {
            color: #4F4F4F;
            margin-bottom: 20px;
        }

        .boton {
            background-color: #27AE60;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            margin: 10px;
            cursor: pointer;
            transition: 0.3s ease;
            text-decoration: none;
            font-size: 16px;
            display: inline-block;
        }

        .boton:hover {
            background-color: #219150;
        }

        p {
            color: #4F4F4F;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Bienvenido a Prácticas U2</h1>
        <p>Plataforma para la gestión de prácticas profesionales</p>
        <a href="login.php" class="boton">Iniciar sesión</a>
        <a href="registro.php" class="boton">Registrarse</a>
    </div>
</body>
</html>

