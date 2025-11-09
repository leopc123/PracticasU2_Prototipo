<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, correo, contraseña, rol)
            VALUES ('$nombre', '$correo', '$password_hash', '$rol')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('✅ Usuario registrado correctamente');</script>";
    } else {
        echo "<script>alert('❌ Error al registrar: " . $conn->error . "');</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro | Prácticas U2</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h2>Bienvenido a Prácticas U2</h2>
        <form method="POST">
            <input type="text" name="nombre" placeholder="Nombre completo" required><br>
            <input type="email" name="correo" placeholder="Correo electrónico" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            
            <select name="rol" required>
                <option value="">Seleccione un rol</option>
                <option value="estudiante">Estudiante</option>
                <option value="empresa">Empresa</option>
                <option value="coordinador">Coordinador</option>
            </select><br>
            
            <button type="submit">Registrar</button>
        </form>
        <div class="texto-pequeno">
            ¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a>
        </div>
    </div>
</body>
</html>
