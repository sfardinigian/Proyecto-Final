<?php
session_start();

if (!isset($_SESSION['usuario']))
{
    header('Location: inicio.php?error=sesion');
    exit;
}

require_once '../controllers/usuarioController.php';

$usuarioSesion = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        if (localStorage.getItem("theme") === "dark")
        {
            document.documentElement.classList.add("dark");
        }
    </script>

    <link rel="stylesheet" href="../css/style.css">

    <link rel="icon" href="../img/logo_mini.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

    <script src="../js/script.js" defer></script>

    <title>Página principal</title>
</head>

<body>
    <h1>Hola <?php echo htmlspecialchars($usuarioSesion['nombre']); ?> 👋</h1>
    <p>Bienvenido a "Cronos"</p>

    <button id="cuentaBoton" class="cuentaLogo"></button>

    <div class="cuentaCont">
        <div id="cuentaDatos" class="cuentaDatosCss">
            <span id="cerrarMenu" class="cerrarMenu">&times;</span>

            <div class="cent">
                <h1>Cuenta</h1>
            </div>

            <p class="subrayado"><?php echo htmlspecialchars($usuarioSesion['nombre']); ?></p>
            <p class="subrayado"><?php echo htmlspecialchars($usuarioSesion['apellido']); ?></p>
            <p class="subrayado"><?php echo htmlspecialchars($usuarioSesion['email']); ?></p>

            <div class="cent2">
                <form action="modif.php" class="espaciar">
                    <input type="submit" value="Modificar datos">
                </form>

                <form action="../controllers/logoutController.php" class="espaciar">
                    <input type="submit" value="Cerrar sesión">
                </form>

                <form action="" class="espaciar">
                    <input type="submit" value="Eliminar cuenta">
                </form>
            </div>

            <div class="cent3">
                <div class="modoContainer">
                    <span id="iconoSol" class="modoIcono">☀︎</span>
                    <span id="iconoLuna" class="modoIcono">🌙︎</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>