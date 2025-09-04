<?php
$usuarios = [
    ['usuario'=>'alumno', 'clave'=>'1nformatica'],
    ['usuario'=>'profesor', 'clave'=>'l1cenciado'],
    ['usuario'=>'admin', 'clave'=>'admin123']
];

$mensaje = "";

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $usuarioIngresado = $_POST['usuario'];
    $claveIngresada = $_POST['clave'];
    $encontrado = false;

    foreach ($usuarios as $user) {
        if ($usuarioIngresado === $user['usuario'] && $claveIngresada === $user['clave']) {
            $encontrado = true;
            break;
        }
    }

    if ($encontrado) {
        $mensaje = "Bienvenido, " . htmlspecialchars($usuarioIngresado);
    } else {
        $mensaje = "Error. Datos incorrectos.";
    }
}

include("../Vista/ejercicio3.php");
?>