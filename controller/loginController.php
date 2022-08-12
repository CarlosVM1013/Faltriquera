<?php

function conexion() {
    $direccion = "127.0.0.1";
    $usuario = "root";
    $contrasenya = "vIu5oSLpNMM7";
    $bd = "faltriquera";    
    $conexion=new mysqli($direccion, $usuario, $contrasenya, $bd);
    return $conexion;
}

function limpiarDatos($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function comprobarCredenciales() {
    $link = conexion();
    $usuario = limpiarDatos($_POST['loginNombre']);
    $contrasena = limpiarDatos($_POST['loginContrasena']);
    $valido = true;

    $query = mysqli_query($link, 'SELECT * FROM users WHERE usuario="'.$usuario.'" ');
    $results = mysqli_num_rows($query);
    if ($results === 0) {
        mysqli_close($link);
        $valido = false;
        $usuarioError = 'El usuario no existe';
        include '../view/indexView.php';
    }
    mysqli_free_result($query);

    $query = mysqli_query($link, 'SELECT * FROM users WHERE usuario="'.$usuario.'" ');
    $results = mysqli_fetch_array($query);
    if ($results['password'] !== $contrasena) {
        mysqli_close($link);
        $valido = false;
        $contrasenaError = 'La contraseña no es correcta';
        include '../view/indexView.php';
    }

    mysqli_close($link);

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
