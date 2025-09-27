<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscador de Auto</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <h1>Buscar auto</h1>
        <form method="post" action="accion/accionBuscarAuto.php">
        <table >
            <tr>
                <td>Ingrese una patente:</td>
                <td><input type="text" name="Patente" required> </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Buscar">
                </td>
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