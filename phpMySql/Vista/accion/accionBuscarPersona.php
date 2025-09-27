<?php
include_once '../../Control/controlPersona.php';
$persona= $_POST;
$control= new ControlPersona();
echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Resultado</title><link rel='stylesheet' href='../estilos.css'></head><body>";
$persoObj= $control->buscarXdni($persona);
if($persoObj != null){
    echo "<form method='post' action='accionActualizarDatosPersona.php'><table>
    <tr>
        <th colspan='2'>" . $persoObj->getDni() . "</th>
        <input type='hidden' name='NroDni' value='" . $persoObj->getDni() . "'>
    </tr>
    <tr>
        <td>Apellido:</td>
        <td><input type='text' name='Apellido' value='" . $persoObj->getApellido() . "'></td>
    </tr>
    <tr>
        <td>Nombre:</td>
        <td><input type='text' name='Nombre' value='" . $persoObj->getNombre() . "'></td>
    </tr>
    <tr>
        <td>Fecha de Nacimiento:</td>
        <td><input type='text' name='fechaNac' value='" . $persoObj->getFechaNac() . "'></td>
    </tr>
    <tr>
        <td>Teléfono:</td>
        <td><input type='text' name='Telefono' value='" . $persoObj->getTelefono() . "'></td>
    </tr>
    <tr>
        <td>Domicilio:</td>
        <td><input type='text' name='Domicilio' value='" . $persoObj->getDomicilio() . "'></td>
    </tr>
    <tr>
        <td colspan='2'><input type='submit' value='Actualizar'></td>
    </tr>
    </table></form><p><a href='../buscarPersona.html'>Buscar Persona</a></p>";
}else{
    echo "<p>Persona no encontrada.</p><p><a href='../buscarPersona.html'>Buscar Persona</a></p>";
}
echo "<footer class='main-footer'>
<a href='../index.html' class='footer-link'>
    ← Volver al menú principal
</a>
</footer></body></html>";
?>