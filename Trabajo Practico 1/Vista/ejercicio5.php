<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>

<form action="../Control/control-ejercicio5.php" method="get">
    <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre"> <br>
    <input type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido"> <br>
    <input type="number" name="edad" id="edad" placeholder="Ingrese su edad"> <br>
    <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion"> <br>
    <p>nivel de estudios</p> <br>
    <input type="radio" name="estudios"  id="estudios" value="sin estudios"> sin estudios <br>
    <input type="radio" name="estudios"  id="estudios" value="primarios"> primarios <br>
    <input type="radio" name="estudios"  id="estudios" value="secundarios"> secundarios <br>
    <p>seleccione se sexo</p> <br>
    <select name="sexo" id="sexo">
        <option value="masculino">masculino</option>
        <option value="femenino">femenino</option>
        <option value="otro">otro</option>
    </select>
    <input type="submit" value="Enviar">
</form>


<p><?php if (isset($mensaje)) { echo $mensaje; } ?></p>

</body>
</html>