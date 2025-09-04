<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
</head>
<body>
    
<form action="../Control/control-ejercicio2.php" method="get" id="form">
    <p>Ingrese sus horarios de cursada de PWD:</p>
    <input type="number" name="lunes" id="lunes" placeholder="Lunes"> <br>
    <input type="number" name="martes" id="martes" placeholder="Martes"> <br>
    <input type="number" name="miercoles" id="miercoles" placeholder="Miercoles"> <br>
    <input type="number" name="jueves" id="jueves" placeholder="Jueves"> <br>
    <input type="number" name="viernes" id="viernes" placeholder="Viernes"> <br>  
    <input type="submit" value="calcular">
    <div id="error"></div>
</form>

<p><?php if (isset($mensaje)) { echo $mensaje; } ?></p>

</body>

<script>

$(document).ready(function () {
        $("#form").validate({
            rules: {
                lunes: { number: true, min: 0, max: 23},
                martes: { number: true, min: 0, max: 23},
                miercoles: { number: true, min: 0, max: 23},
                jueves: { number: true, min: 0, max: 23},
                viernes: { number: true, min: 0, max: 23},
            },
            messages: {
                lunes: { number: "Debe ingresar un valor numerico entre 0 y 23", min: "Debe ingresar un valor numerico entre 0 y 23", max: "Debe ingresar un valor numerico entre 0 y 23"},
                martes: { number: "Debe ingresar un valor numerico entre 0 y 23", min: "Debe ingresar un valor numerico entre 0 y 23", max: "Debe ingresar un valor numerico entre 0 y 23"},
                miercoles: { number: "Debe ingresar un valor numerico entre 0 y 23", min: "Debe ingresar un valor numerico entre 0 y 23", max: "Debe ingresar un valor numerico entre 0 y 23"},
                jueves: { number: "Debe ingresar un valor numerico entre 0 y 23", min: "Debe ingresar un valor numerico entre 0 y 23", max: "Debe ingresar un valor numerico entre 0 y 23"},
                viernes: { number: "Debe ingresar un valor numerico entre 0 y 23", min: "Debe ingresar un valor numerico entre 0 y 23", max: "Debe ingresar un valor numerico entre 0 y 23"},
            }
        })
    });

</script>



</html>