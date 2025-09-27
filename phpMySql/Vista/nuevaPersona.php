<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nueva Persona</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <h1>Ingresar persona nueva</h1>
        <form method="post" action="accion/accionNuevaPersona.php">
        <table>
            <tr>
                <td>Ingrese el DNI:</td>
                <td><input type="text" name="NroDni" required></td>
            </tr>
            <tr>
                <td>Ingrese el apellido:</td>
                <td><input type="text" name="Apellido" required></td>
            </tr>
            <tr>
                <td>Ingrese el nombre:</td>
                <td><input type="text" name="Nombre" required></td>
            </tr>
            <tr>
                <td>Ingrese la fecha de nacimiento:</td>
                <td><input type="date" name="fechaNac" required></td>
            </tr>
            <tr>
                <td>Ingrese el telefono:</td>
                <td><input type="number" name="Telefono" required></td>
            </tr>
            <tr>
                <td>Ingrese el domicilio:</td>
                <td><input type="text" name="Domicilio" required></td>
            </tr>
            <tr>
                <td colspan="2"> <input type="submit" value="Ingresar"></td>
            </tr>
        </table>
        </form>
        <footer class='main-footer'>
            <a href='index.html' class='footer-link'>
                ← Volver al menú principal
            </a>
        </footer>
    </body>
</html>