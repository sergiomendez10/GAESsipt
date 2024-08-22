<?php
$servername = "localhost"; // Cambia esto por tu servidor
$username = "root"; // Cambia esto por tu nombre de usuario
$password = "root"; // Cambia esto por tu contraseña
$dbname = "sipt_technology"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
};
?>


<?php

$loginusuario = $_POST['username'];
$Contraseña = $_POST['password'];

// Consulta SQL de inserción
$sql = "SELECT * FROM `usuario` WHERE email= '$loginusuario' and Contraseña='$Contraseña'";

if ($conn->query($sql) ->num_rows > 0) {
    echo "Nuevo registro creado exitosamente";
    header("Location: dashboard.php"); // Redirigir a dashboard.php
} else {
    echo "Usuario o contraseña incorrectos: ";
}

// Cerrar conexión
$conn->close();
?>
