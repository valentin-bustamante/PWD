<?php
include_once '../../Control/controlPersona.php';
$datos= $_POST;
$control= new ControlPersona();
$exito= $control->modificacion($datos);
echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Resultado</title><link rel='stylesheet' href='../estilos.css'></head><body>";
if( $exito){
    echo "<h2>Actualizacion exitosa!.</h2><p><a href='../buscarPersona.html'>Buscar Persona</a></p>";
}else{
    echo "<h2>No se pudo actualizar.</h2><p><a href='../buscarPersona.html'>Buscar Persona</a></p>";
}
echo "<footer class='main-footer'>
<a href='../index.html' class='footer-link'>
    ← Volver al menú principal
</a>
</footer></body></html>";
?>