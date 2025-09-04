<?php

$directorio = "C:/xampp/htdocs/PWD/Trabajo Practico 3/Archivos/";

if ($_FILES['archivo']['error'] <= 0) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamano = $_FILES['archivo']['size'];
    $temporal = $_FILES['archivo']['tmp_name'];
    $extension = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));

    if ($extension === 'txt') {
        $destino = $directorio . basename($nombre);
        if (move_uploaded_file($temporal, $destino)) {
            $mensaje = "Archivo guardado correctamente.<br>";
            $mensaje .= "<textarea rows='10' cols='50' readonly>" . htmlspecialchars(file_get_contents($destino)) . "</textarea>";
        } else {
            $mensaje = "Error al guardar el archivo.<br>";
        }
    } else {
        $mensaje = "Error: Solo se permiten archivos .txt.<br>";
    }
}


include("../Vista/ejercicio2.php");



?>