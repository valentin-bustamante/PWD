<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cambio de Dueño</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <h1>Cambiar de dueño</h1>
        <form method="post" action="accion/accionCambioDuenio.php" >
        <table>
            <tr>
                <td>Ingrese la patente:</td>
                <td><input type="text" name="Patente" required></td>
            </tr>
            <tr>
                <td>Ingrese el DNI del nuevo dueño:</td>
                <td><input type="text" name="NroDni" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Cambiar"> </td>
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