<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AutosXPersona</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <h1>Buscar los autos registrados de una persona</h1>
        <form method="post" action="accion/accionAutosPersona.php">
        <table>
            <tr>
                <td>Ingrese un DNI:</td>
                <td><input type="text" name="NroDni" required></td>
            </tr>
            <tr>
                <td colspan="2"> <input type="submit" value="Buscar"></td>
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