<?php

$directorio = "C:/xampp/htdocs/PWD/Trabajo Practico 3/Archivos/";
$maximo = 2 * 1024 * 1024; 

if ($_FILES['archivo']['error'] <= 0) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamano = $_FILES['archivo']['size'];
    $temporal = $_FILES['archivo']['tmp_name'];
    $extension = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));

    
    if (($extension === 'pdf' || $extension === 'doc' || $extension === 'docx') && $tamano <= $maximo) {
        $destino = $directorio . basename($nombre);
        if (move_uploaded_file($temporal, $destino)) {
            $mensaje = "Archivo guardado correctamente.<br>";
            $mensaje .= "<a href='../Archivos/" . htmlspecialchars(basename($nombre)) . "' target='_blank'>Ver archivo</a>";
        } else {
            $mensaje = "Error al guardar el archivo.<br>";
        }
    } else {
        $mensaje = "Error: Solo se permiten archivos .doc, .docx o .pdf y de hasta 2 MB.<br>";
    }
} else {
    $mensaje = "Error: " . $_FILES['archivo']['error'] . "<br>";
}

include("../Vista/ejercicio1.php");

?>