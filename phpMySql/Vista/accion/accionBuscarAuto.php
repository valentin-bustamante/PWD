<?php
include_once '../../Control/controlAuto.php';
include_once '../../Control/controlPersona.php';
$patente= $_POST['Patente'];
$control= new ControlAuto();
$auto= $control->buscarXpatente(['Patente' => $patente]);

echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Resultado</title><link rel='stylesheet' href='../estilos.css'></head><body>";
if($auto !=null){
    $controlP= new ControlPersona();
    $persona= $controlP->buscarXdni(['NroDni' => $auto->getDniDuenio()]);
    echo "<table>
            <tr><th colspan='2'>Auto Encontrado!</th><tr>
            <tr>
                <td>Patente:</td>
                <td>" . $auto->getPatente() ."</td>
            </tr>
            <tr>
                <td>Marca:</td>
                <td>" . $auto->getMarca() ."</td>
            </tr>
            <tr>
                <td>Modelo:</td>
                <td>" . $auto->getModelo() ."</td>
            </tr>";
    if( $persona != null){
        echo "<tr>
                <td>Dueño:</td>
                <td>" . $persona->getApellido() . " " . $persona->getNombre() . "</td>
            </tr>";
    }else{
        echo "<tr><td colspan='2'>Dueño no encontrado.</td></tr>";
    }
    echo "</table><p><a href='../buscarAuto.php'>Buscar Auto</a></p>";
}else{
    echo "<p>No se encontró ningún auto con patente " . $patente . "</p><p><a href='../buscarAuto.php'>Buscar Auto</a></p>";
}
echo "<footer class='main-footer'>
<a href='../index.html' class='footer-link'>
    ← Volver al menú principal
</a>
</footer></body></html>";
?>