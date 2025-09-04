<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <title>Datos</title>
</head>
<body>

<form action="../Control/control-ejercicio4.php" method="get" id="form">
    <input required type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre"> <br>
    <input required type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido"> <br>
    <input required type="number" name="edad" id="edad" placeholder="Ingrese su edad"> <br>
    <input required type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion"> <br>
    <input type="submit" value="Enviar">
</form>


<p><?php if (isset($mensaje)) { echo $mensaje; } ?></p>

</body>
<script>
$(document).ready(function () {
        $("#form").validate({
            rules: {
                nombre: { required: true,  text: true },
                apellido: { required: true,  text: true },
                edad: { required: true, number: true, min: 0, max: 99 },
                direccion: { required: true },
            },
            messages: {
                nombre: { required: "Valor requerido", text: "El valor debe ser valido" },
                apellido: { required: "Valor requerido", text: "El valor debe ser valido" },
                edad: { required: "Valor requerido", number: "El valor debe ser numerico.", min: "Ingrese un valor entre 0 y 99.", max: "Ingrese un valor entre 0 y 99." },
                direccion: { required: "Valor requerido" },
            }
        })
    });
</script>


</html>