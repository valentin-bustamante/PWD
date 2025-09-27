<?php
include_once '../../Control/controlAuto.php';
include_once '../../Control/controlPersona.php';
$auto= $_POST;
$control= new ControlAuto();
echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Resultado</title><link rel='stylesheet' href='../estilos.css'></head><body>";
if ($control->buscarXpatente($auto)=== null){
    $controlP= new ControlPersona();
    if( $controlP->buscarXdni( ['NroDni' => $auto['DniDuenio']])){
        if( $control->alta($auto) ){
            echo "<h2>Carga exitosa!</h2><p><a href='../nuevoAuto.php'>Nuevo Auto</a></p>";
        }else{
            echo "<h2>Error al cargar auto.</h2><p><a href='../nuevoAuto.php'>Nuevo Auto</a></p>";
        }
    }else{
        echo "<h2>Persona no encontrada.</h2><p> <a href='../nuevaPersona.php'>Ingresar persona</a></p><p><a href='../nuevoAuto.php'>Nuevo Auto</a></p>";
    }
}else{
    echo "<h2>Error, auto ya cargado.</h2><p><a href='../nuevoAuto.php'>Nuevo Auto</a></p>";
}
echo "<footer class='main-footer'>
<a href='../index.html' class='footer-link'>
    ← Volver al menú principal
</a>
</footer></body></html>";
?>