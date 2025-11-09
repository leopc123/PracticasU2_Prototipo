<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE correo='$correo'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($password, $usuario['contraseña'])) {
            echo "<script>alert('✅ Bienvenido, " . $usuario['nombre'] . "');</script>";
        } else {
            echo "<script>alert('❌ Contraseña incorrecta.');</script>";
        }
    } else {
        echo "<script>alert('❌ El correo no está registrado.');</script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login | Prácticas U2</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="contenedor">
        <h2>Iniciar Sesión</h2>
        <form method="POST">
            <input type="email" name="correo" placeholder="Correo electrónico" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <button type="submit">Ingresar</button>
        </form>
        <div class="texto-pequeno">
            ¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a>
        </div>
    </div>
</body>
</html>
