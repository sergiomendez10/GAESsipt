<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Rol - Sipt Technology</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    
    <section class="role-selection">
    <a href="index.php" class="back-button">← Volver</a>
    <img src="logoai.png" alt="Sipt Technology" class="logo-rol">
        <div class="role-header">
            <h1>Iniciar Sesión según tu rol</h1>
            <p>Elige tu rol para ingresar</p>
        </div>
        <div class="roles">
            <div class="role">
                <a href="login.php?role=lider" class="role-link">
                    <img src="lider-administrador.png" alt="Líder Administrador">
                    <h2>Líder Administrador</h2>
                </a>
            </div>
            <div class="role">
                <a href="login.php?role=admin" class="role-link">
                    <img src="admin-supervisor.png" alt="Administrador y/o Supervisor">
                    <h2>Administrador y/o Supervisor</h2>
                </a>
            </div>
            <div class="role">
                <a href="login.php?role=colaborador" class="role-link">
                    <img src="colaborador-planta.png" alt="Colaborador Planta">
                    <h2>Colaborador Planta</h2>
                </a>
            </div>
        </div>
    </section>
</body>
</html>
