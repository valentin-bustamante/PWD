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

<form action="../Control/control-ejercicio8.php" method="get" id="form">
    <input required type="number" name="edad" placeholder="Ingrese su edad:">
    <p> ¿Sos estudiante?<br>
     <input  type="radio" name="estudios" value="true"> Si. <br>
     <input  type="radio" name="estudios" value="false"> No. <br>

     
     <input type="submit" value="Enviar">
    </form>

<form action="../Vista/ejercicio8.php" method="get">
    <input type="submit" value="Limpiar Form">
</form>
    

<p><?php if (isset($mensaje)) { echo $mensaje; } ?></p>

</body>
<script>
$(document).ready(function () {
    $("#form").validate({
        rules: {
            edad: { required: true, number: true, min: 0, max: 99 },
            estudios: { required: true},
        },
        messages: {
            edad: { required: "Ingrese un numero", number: "Ingrese un valor numerico del 0 al 99", min: "Ingrese un valor numerico del 0 al 99", max: "Ingrese un valor numerico del 0 al 99" },
            estudio: { required: "Seleccione una opción."},
        }
    });
});
</script>


</html>