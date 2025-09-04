<?php
$errores = [];
$datos = [];

if (
    isset($_POST['titulo']) && isset($_POST['actores']) && isset($_POST['director']) && isset($_POST['guion']) &&
    isset($_POST['produccion']) && isset($_POST['anio']) && isset($_POST['nacionalidad']) &&
    isset($_POST['duracion']) && isset($_POST['restriccion']) && isset($_POST['sinopsis'])
) {
    // Título
    $titulo = trim($_POST['titulo']);
    if ($titulo === "") {
        $errores[] = "El título es obligatorio.";
    } else {
        $datos['titulo'] = $titulo;
    }

    // Actores
    $actores = trim($_POST['actores']);
    if ($actores === "") {
        $errores[] = "Los actores son obligatorios.";
    } else {
        $datos['actores'] = $actores;
    }

    // Director
    $director = trim($_POST['director']);
    if ($director === "") {
        $errores[] = "El director es obligatorio.";
    } else {
        $datos['director'] = $director;
    }

    // Guión
    $guion = trim($_POST['guion']);
    if ($guion === "") {
        $errores[] = "El guión es obligatorio.";
    } else {
        $datos['guion'] = $guion;
    }

    // Producción
    $produccion = trim($_POST['produccion']);
    if ($produccion === "") {
        $errores[] = "La producción es obligatoria.";
    } else {
        $datos['produccion'] = $produccion;
    }

    // Año
    $anio = trim($_POST['anio']);
    if (!is_numeric($anio) || strlen($anio) > 4 || $anio < 0 || $anio > 9999) {
        $errores[] = "El año debe ser un número de hasta 4 cifras válido.";
    } else {
        $datos['anio'] = $anio;
    }

    // Nacionalidad
    $nacionalidad = trim($_POST['nacionalidad']);
    if ($nacionalidad === "") {
        $errores[] = "La nacionalidad es obligatoria.";
    } else {
        $datos['nacionalidad'] = $nacionalidad;
    }

    // Duración
    $duracion = trim($_POST['duracion']);
    if (!is_numeric($duracion) || strlen($duracion) > 3 || $duracion < 1) {
        $errores[] = "La duración debe ser un número de hasta 3 cifras válido.";
    } else {
        $datos['duracion'] = $duracion;
    }

    // Restricción
    $restriccion = $_POST['restriccion'];
    $datos['restriccion'] = $restriccion;

    // Sinopsis
    $sinopsis = trim($_POST['sinopsis']);
    if ($sinopsis === "") {
        $errores[] = "La sinopsis es obligatoria.";
    } else {
        $datos['sinopsis'] = $sinopsis;
    }
} else {
    $errores[] = "Todos los campos son obligatorios.";
}

// Manejo de la imagen
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $nombre = $_FILES['imagen']['name'];
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
    $temporal = $_FILES['imagen']['tmp_name'];
    $extension = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));
    $maximo = 10 * 1024 * 1024;

    if (
        ($extension === 'jpg' || $extension === 'jpeg' || $extension === 'png') && $tamano <= $maximo
    ) {
        $directorio = "C:/xampp/htdocs/PWD/Trabajo Practico 3/Imagenes/";
        $nombre_final = uniqid('img_') . '.' . $extension;
        $destino = $directorio . $nombre_final;
        if (move_uploaded_file($temporal, $destino)) {
            
            $datos['imagen'] = "../Imagenes/" . $nombre_final;
        } else {
            $errores[] = "Error al guardar la imagen.";
        }
    } else {
        $errores[] = "Error: La imagen debe ser .jpg, .jpeg o .png y no debe superar los 10MB.";
    }
} elseif (isset($_FILES['imagen']) && $_FILES['imagen']['error'] !== UPLOAD_ERR_NO_FILE) {
    $errores[] = "Error al subir la imagen.";
}

include '../Vista/ejercicio3.php';
?>