<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nuevo Auto</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <h1>Ingresar auto nuevo</h1>
        <form method="post" action="accion/accionNuevoAuto.php">
        <table>
            <tr>
                <td>Ingrese la patente:</td>
                <td><input type="text" name="Patente" required></td>
            </tr>
            <tr>
                <td>Ingrese la marca:</td>
                <td><input type="text" name="Marca" required></td>
            </tr>
            <tr>
                <td>Ingrese el modelo:</td>
                <td><input type="text" name="Modelo" required></td>
            </tr>
            <tr>
                <td>Ingrese el DNI del dueño:</td>
                <td><input type="text" name="DniDuenio" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Ingresar"></td>
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