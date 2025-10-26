<?php
// Recibir datos del formulario
$usuario = $_POST['usuario'] ?? '';
$contrasena = $_POST['contrasena'] ?? '';

// Validar usuario y contraseña hardcodeados
if ($usuario === "admin" && $contrasena === "12345") {
    // Redirigir a la página de bienvenida
    header("Location: home.html");
    exit();
} else {
    // Redirigir de nuevo al login
    header("Location: login.html");
    exit();
}
?>
