<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de cuenta</title>
</head>

<body>
    <h1>Bienvenido/a</h1>

    <form action="controllers/usuarioController.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="text" name="apellido" placeholder="Apellido" required><br>
        <input type="email" name="email" placeholder="Correo electrónico" required><br>

        <br>

        <input type="password" name="pass" placeholder="Contraseña" required><br>
        <input type="password" name="pass2" placeholder="Repita su contraseña" required><br>

        <br>

        <input type="submit" value="Registrarse" name="registrar">
        <p>¿Ya tienes una cuenta?</p>
        <a href="views/inicio.php">Iniciar sesión</a>
    </form>
</body>

</html>