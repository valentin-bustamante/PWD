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

<form action="../Control/control-ejercicio7.php" method="get" id="form">

    <input required type="text" name="num1" id="num1" placeholder="Ingrese un numero"> <br>
    <input required type="text" name="num2" id="num2" placeholder="Ingrese otro numero"> <br>
    
    <select name="operacion" id="operacion">
        <option value="" disabled selected>Operación</option>
        <option value="+">Sumar</option>
        <option value="-">Restar</option>
        <option value="*">Multiplicar</option>
        <option value="/">Dividir</option>
    </select>

    <input type="submit" value="Enviar">
</form>


<p><?php if (isset($mensaje)) { echo $mensaje; } ?></p>

</body>
<script>
$(document).ready(function () {
    $.validator.addMethod("operacionValida", function(value, element) {
        return ["+", "-", "*", "/"].includes(value);
    }, "Seleccione una operación válida.");

    $.validator.addMethod("divisionPorCero", function(value, element) {
        let operacion = $('#operacion').val();
        let output = true
        if(operacion === "/"){
             output = parseFloat(value) !== 0;
        }
        return output
    })

    $("#form").validate({
        rules: {
            num1: { required: true, number: true },
            num2: { required: true, number: true, divisionPorCero: true},
            operacion: { required: true, operacionValida: true }
        },
        messages: {
            num1: { required: "Ingrese un numero", number: "Debe ser un número" },
            num2: { required: "Ingrese un numero", number: "Debe ser un número", divisionPorCero: "No se puede dividir por cero." },
            operacion: { required: "Seleccione una operación", operacionValida: "Seleccione una operación válida." }
        }
    });
});
</script>

</html>