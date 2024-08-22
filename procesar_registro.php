<?php
// Detalles de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sipt_technology";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone_number = $_POST['phone_number'];

// Iniciar transacción
$conn->begin_transaction();

try {
    // Insertar datos en la tabla `usuario`
    $sql_usuario = "INSERT INTO usuario (Loginusuario, Contraseña, Id_departamento, Id_rol, email )
                    VALUES ('$username', '$password', 1, 1, '$email' )";
    
    if (!$conn->query($sql_usuario)) {
        throw new Exception("Error al insertar en usuario: " . $conn->error);
    }

    // Obtener el ID del usuario recién insertado
    $usuario_id = $conn->insert_id;

    // Insertar datos en la tabla `empleado`
    $sql_empleado = "INSERT INTO empleado (Nombre, Apellido, Movil, `E-mail`, Cargo)
                     VALUES ('$first_name', '$last_name', '$phone_number', '$email', 'Tu_Cargo')";
    
    if (!$conn->query($sql_empleado)) {
        throw new Exception("Error al insertar en empleado: " . $conn->error);
    }

    // Confirmar la transacción
    $conn->commit();
    echo "Registro exitoso";

} catch (Exception $e) {
    // Revertir la transacción en caso de error
    $conn->rollback();
    echo $e->getMessage();
}

// Cerrar conexión
$conn->close();
?>
