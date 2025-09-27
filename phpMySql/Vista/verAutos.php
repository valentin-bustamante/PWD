<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Autos</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <h1>Autos registrados</h1>

        <?php
            include_once '../Control/controlAuto.php';
            include_once '../Control/controlPersona.php';
            $control= new ControlAuto();
            $autos= $control->listar();
            if(count($autos)>0){
                echo "<table>";
                echo "<tr><th>Patente</th><th>Marca</th><th>Modelo</th><th>Dueño</th></tr>";
                foreach($autos as $auto){
                    $controlP= new ControlPersona();
                    $persona= $controlP->buscarXdni(['NroDni' => $auto->getDniDuenio()]);
                    echo "<tr>
                            <td>" . $auto->getPatente() . "</td>
                            <td>" . $auto->getMarca() . "</td>
                            <td>" . $auto->getModelo() . "</td> ";
                            if($persona != null){
                                echo "<td>" . $persona->getApellido() . " " . $persona->getNombre() . "</td>";
                            }else{
                                echo "<td> No encontrado.</td>";
                            }
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo "<p>No hay autos registrados en la base de datos.</p>";
            }
        ?>
        <footer class='main-footer'>
            <a href='index.html' class='footer-link'>
                ← Volver al menú principal
            </a>
        </footer>
    </body>
</html>