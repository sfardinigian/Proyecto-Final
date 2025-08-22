<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>

<body>
    <h1>Bienvenido/a</h1>

    <?php if (isset($_GET['error'])): ?>
        <div style="color:red;">
            <?php
            switch ($_GET['error'])
            {
                case 'email':
                    echo "❌ El correo electrónico no está registrado.";
                    break;
                case 'pass':
                    echo "❌ La contraseña es incorrecta.";
                    break;
            }
            ?>
        </div>
    <?php endif; ?>

    <form action="../controllers/loginController.php" method="post">
        <input type="email" name="email" placeholder="Correo electrónico" required><br>
        <input type="password" name="pass" placeholder="Contraseña" required><br>

        <br>

        <input type="submit" value="Ingresar" name="login">

        <br>

        <p>¿No tienes cuenta?</p>
        <a href="../index.php">Crea una</a>
    </form>
</body>

</html>