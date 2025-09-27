<?php
include_once '../../Control/controlAuto.php';
include_once '../../Control/controlPersona.php';
$datos= $_POST;
$controlA= new ControlAuto();
$controlP= new ControlPersona();
echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Resultado</title><link rel='stylesheet' href='../estilos.css'></head><body>";
$autoObj= $controlA->buscarXpatente($datos);
if( $autoObj != null){
    if($controlP->buscarXdni($datos) != null){
        $autoArr= ['Patente' => $autoObj->getPatente() , 
        'Marca' => $autoObj->getMarca() , 
        'Modelo' => $autoObj->getModelo() ,
        'DniDuenio' => $datos['NroDni']];
        if( $controlA->modificacion($autoArr)){
            echo "<h2>Cambio exitoso!</h2><p><a href='../cambioDuenio.php'>Cambio de Dueño</a></p>";
        }else{
            echo "<h2>Error en el cambio de dueño.</h2><p><a href='../cambioDuenio.php'>Cambio de Dueño</a></p>";
        }
    }else{
        echo "<h2>Persona no encontrada.</h2><p> <a href='../nuevaPersona.php'>Ingresar persona</a></p><p><a href='../cambioDuenio.php'>Cambio de Dueño</a></p>";
    }
}else{
    echo "<h2>Auto no encontrado.</h2><p> <a href='../nuevoAuto.php'>Ingresar auto.</a></p><p><a href='../cambioDuenio.php'>Cambio de Dueño</a></p>";
}
echo "<footer class='main-footer'>
<a href='../index.html' class='footer-link'>
    ← Volver al menú principal
</a>
</footer></body></html>";
?>