<?php
include_once '../../Control/controlPersona.php';
$persona= $_POST;
$control= new ControlPersona();
echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Resultado</title><link rel='stylesheet' href='../estilos.css'></head><body>";
if( $control->buscarXdni($persona) === null ){
    if( $control->alta($persona) ){
        echo "<h2>Carga exitosa!</h2><p><a href='../nuevaPersona.php'>Nueva Persona</a></p>";
    }else{
        echo "<h2>Error al cargar persona.</h2><p><a href='../nuevaPersona.php'>Nueva Persona</a></p>";
    }
}else{
    echo "<h2>Error, persona ya cargada.</h2><p><a href='../nuevaPersona.php'>Nueva Persona</a></p>";
}
echo "<footer class='main-footer'>
<a href='../index.html' class='footer-link'>
    ← Volver al menú principal
</a>
</footer></body></html>";
?>