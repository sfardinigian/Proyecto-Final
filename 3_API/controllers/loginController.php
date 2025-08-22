<?php
require_once __DIR__ . '/../models/Usuario.php';

// Se consulta iniciar la sesión
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login']))
{
    $email = trim($_POST['email']);
    $pass  = trim($_POST['pass']);

    $usuario = new Usuario();
    $data = $usuario->getByEmail($email);

    // Verificamos si se encontró el usuario
    if (!$data)
    {
        header('Location: ../views/inicio.php?error=email');
        exit;
    }

    // Verificamos si la contraseña es correcta
    if (!password_verify($pass, $data['pass']))
    {
        header('Location: ../views/inicio.php?error=pass');
        exit;
    }

    $_SESSION['usuario'] = ['id_usuario' => $data['id_usuario'], 'nombre' => $data['nombre'], 'apellido' => $data['apellido'], 'email' => $data['email']];

    header('Location: ../views/main.php');
    exit;
}
?>