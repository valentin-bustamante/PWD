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

<form action="../Control/control-ejercicio6.php" method="get" id="form">
    <input required type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre"> <br>
    <input required type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido"> <br>
    <input required type="number" name="edad" id="edad" placeholder="Ingrese su edad"> <br>
    <input required type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion"> <br>
    <p>Estudios:</p>
    <input type="radio" name="estudios" id="estudios1" value="sin estudios"> Sin estudios. <br>
    <input type="radio" name="estudios" id="estudios2" value="primarios"> Primarios. <br>
    <input type="radio" name="estudios" id="estudios3" value="secundarios"> Secundarios. <br>
    <div id="error"></div>
    <p>Sexo:</p>
    <select name="sexo" id="sexo">
        <option value="" disabled selected>Seleccione:</option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        <option value="otro">Otro</option>
    </select> 
    
    <p>Deportes que realiza: </p> 
    <input type="checkbox" name="deportes[]" value="futbol"><label>Futbol</label>
    <input type="checkbox" name="deportes[]" value="basket"><label>Basket</label>
    <input type="checkbox" name="deportes[]" value="tennis"><label>Tennis</label>
    <input type="checkbox" name="deportes[]" value="voley"><label>Voley</label>

    
    <br>


    <input type="submit" value="Enviar">
</form>


<p><?php if (isset($mensaje)) { echo $mensaje; } ?></p>

</body>

<script>
$(document).ready(function () {
    $("#form").validate({
        rules: {
            nombre: { required: true },
            apellido: { required: true },
            edad: { required: true, number: true, min: 0, max: 99 },
            direccion: { required: true },
            estudios: { required: true },
            sexo: { required: true }
        },
        messages: {
            nombre: { required: "Valor requerido" },
            apellido: { required: "Valor requerido" },
            edad: { required: "Valor requerido", number: "El valor debe ser numerico.", min: "Ingrese un valor entre 0 y 99.", max: "Ingrese un valor entre 0 y 99." },
            direccion: { required: "Valor requerido" },
            estudios: { required: "Seleccione una opcion." },
            sexo: { required: "Seleccione una opcion." }
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "estudios") {
                error.insertAfter('#error');
            } else {
                error.insertAfter(element);
            }
        }
    });
});
</script>



</html>
