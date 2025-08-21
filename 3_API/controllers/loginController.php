<?php
require_once __DIR__ . '/../models/Usuario.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login']))
{
    $email = $_POST['email'];
    $pass  = $_POST['pass'];

    $usuario = new Usuario();

    $data = $usuario->getByEmail($email);

    if ($data)
    {
        if (password_verify($pass, $data['pass']))
        {
            $_SESSION['usuario'] = ['id_usuario' => $data['id_usuario'], 'nombre' => $data['nombre'], 'apellido' => $data['apellido'], 'email' => $data['email']];

            header('Location: ../views/main.php');
            exit;
        }
        else
        {
            header('Location: ../views/inicio.php?error=login');
            exit;
        }
    }
}
