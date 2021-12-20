<?php

function limpiarDatos($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function comprobarCredenciales() {
    $usuario = limpiarDatos($_POST['loginNombre']);
    $contrasena = limpiarDatos($_POST['loginContrasena']);
    $valido = true;

    $usuario1 = '';
    $pass1 = '';

    if ($usuario !== $usuario1) {
        $valido = false;
        $usuarioError = 'El usuario no existe';
        include '../view/indexView.php';
    }

    if ($pass1 !== $contrasena) {
        $valido = false;
        $contrasenaError = 'La contraseña no es correcta';
        include '../view/indexView.php';
    }

    if ($valido) {
        iniciarSesion($usuario, $results['cod']);
    }
}

function iniciarSesion($usuario, $cod) {
    session_start();
    session_regenerate_id();
    $_SESSION['usuario'] = $usuario;
    $_SESSION['id'] = $cod;
    $_SESSION["timeout"] = time();

    header("Location: /index.php");
    
}

function cerrarSesion() {
    session_start();
    session_destroy();
    header("Location: /index.php");
}

if (!empty($_POST['loginNombre']) && !empty($_POST['loginContrasena'])) {
    comprobarCredenciales();
} else if (!empty($_POST['cerrarSesion'])) {
    cerrarSesion();
} else {
    header("Location: /index.php");
}

?>