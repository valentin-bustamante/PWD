<?php
include_once '../../Control/controlAuto.php';
include_once '../../Control/controlPersona.php';
$dni= $_POST;
$control= new ControlPersona();
$persona= $control->buscarXdni($dni);

echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Resultado</title><link rel='stylesheet' href='../estilos.css'></head><body>";
if($persona != null){
    echo "<h2>Persona</h2>";
    echo "<p>DNI: " . $persona->getDni() . "</p>";
    echo "<p>Apellido: " . $persona->getApellido() . "</p>";
    echo "<p>Nombre: " . $persona->getNombre() . "</p>";
    echo "<p>Fecha Nacimiento: " . $persona->getFechaNac() . "</p>";
    echo "<p>Telefono: " . $persona->getTelefono() . "</p>";
    echo "<p>Domicilio: " . $persona->getDomicilio() . "</p>";
    $controlA= new ControlAuto();
    $where= " DniDuenio = '" . $persona->getDni() . "'";
    $autos= $controlA->listar($where);
    if(count($autos)>0){
        echo "<br><h2>Autos asociados</h2><br>";
        foreach($autos as $auto){
            echo "<p>Patente: " . $auto->getPatente() . "</p>";
            echo "<p>Marca: " . $auto->getMarca() . "</p>";
            echo "<p>Modelo: " . $auto->getModelo() . "</p><br>";
        }
    }else{
        echo "<h2>No tiene autos asociados</h2>";
    }
    echo "<p><a href='../autosPersona.php'>Buscar autos registrados de una persona</a></p>";
}else{
    echo "<h2>No se encontró ninguna persona con DNI " . $dni['NroDni'] . "</h2><p><a href='../autosPersona.php'>Buscar autos registrados de una persona</a></p>";
}
echo "<footer class='main-footer'>
<a href='../index.html' class='footer-link'>
    ← Volver al menú principal
</a>
</footer></body></html>";
?>