<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Creación de cuenta</title>
</head>

<body>
    <div class="contRegIn">
        <h1>Bienvenido/a</h1>

        <?php if (isset($_GET['error'])): ?>
            <div style="color:red;">
                <?php
                switch ($_GET['error'])
                {
                    case 'nombre':
                        echo "❌ El nombre sólo debe tener letras.";
                        break;
                    case 'apellido':
                        echo "❌ El apellido sólo debe tener letras.";
                        break;
                    case 'email':
                        echo "❌ El correo electrónico no es válido.";
                        break;
                    case 'pass':
                        echo "❌ La contraseña debe tener al menos 8 caracteres, incluir letras y números.";
                        break;
                    case 'passNoCoincide':
                        echo "❌ Las contraseñas no coinciden.";
                        break;
                    case 'emailExiste':
                        echo "❌ El correo electrónico ya está registrado.";
                        break;
                }
                ?>
            </div>
        <?php endif; ?>

        <form action="controllers/usuarioController.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required><br>
            <input type="text" name="apellido" placeholder="Apellido" required><br>
            <input type="email" name="email" placeholder="Correo electrónico" required><br>

            <br>

            <input type="password" name="pass" placeholder="Contraseña" required><br>
            <input type="password" name="pass2" placeholder="Repita su contraseña" required><br>

            <br>

            <input type="submit" value="Registrarse" name="registrar" id="boton">
            <p>¿Ya tienes una cuenta?</p>
            <a href="views/inicio.php">Iniciar sesión</a>
        </form>
    </div>
</body>

</html>