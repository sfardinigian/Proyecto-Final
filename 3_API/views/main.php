<?php
session_start();

if (!isset($_SESSION['usuario']))
{
    header('Location: inicio.php?error=sesion');
    exit;
}

require_once '../controllers/usuarioController.php';

$usuarioSesion = $_SESSION['usuario'];

$controller = new usuarioController();
$usuario = $controller->obtenerUsuario();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>

<body>
    <h1>Hola <?php echo htmlspecialchars($usuarioSesion['nombre']); ?> 👋</h1>
    <p>Bienvenido/a a "Tiempo ganado"</p>

    <a href="../controllers/logoutController.php">Cerrar sesión</a>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>ID</th>
        </tr>
        <?php foreach ($usuario as $u): ?>
            <tr>
                <td><?= htmlspecialchars($u['nombre']) ?></td>
                <td><?= htmlspecialchars($u['apellido']) ?></td>
                <td><?= htmlspecialchars($u['email']) ?></td>
                <td><?= htmlspecialchars($u['pass']) ?></td>
                <td><?= htmlspecialchars($u['id_usuario']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>