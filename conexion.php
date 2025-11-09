<?php
$servername = "localhost";
$username = "root";     // Usuario por defecto de XAMPP
$password = "";         // Déjalo vacío si no pusiste contraseña
$database = "practicas_db";  // Tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
