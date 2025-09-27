<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Personas</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <h1>Personas registradas</h1>

        <?php
        include_once '../Control/controlPersona.php';
        $control= new ControlPersona();
        $personas= $control->listar();
        if(count($personas)>0){
            echo "<table>";
            echo "<tr><th>DNI</th><th>Apellido</th><th>Nombre></th><th>Fecha Nacimiento</th><th>Telefono</th><th>Domicilio</th></tr>";
            foreach($personas as $persona){
                echo "<tr>
                        <td>" . $persona->getDni() . "</td>
                        <td>" . $persona->getApellido() . "</td>
                        <td>" . $persona->getNombre() . "</td>
                        <td>" . $persona->getFechaNac(). "</td>
                        <td>" . $persona->getTelefono() . "</td>
                        <td>" . $persona->getDomicilio(). "</td>
                    </tr>";
            }
            echo "<tr> <td colspan='6'> <a href='autosPersona.php'>Ir a ver los autos registrados a una persona.</a> </tr>";
            echo "</table>";
        }else{
            echo "<p>No hay personas registradas</p>";
        }
        ?>
        <footer class='main-footer'>
            <a href='index.html' class='footer-link'>
                ← Volver al menú principal
            </a>
        </footer>
    </body>
</html>