<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>

<form action="../Control/control-ejercicio6.php" method="get">
    <input required type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre"> <br>
    <input required type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido"> <br>
    <input required type="number" name="edad" id="edad" placeholder="Ingrese su edad"> <br>
    <input required type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion"> <br>
    <p>Estudios:</p>
    <input required type="radio" name="estudios"  id="estudios" value="sin estudios"> Sin estudios. <br>
    <input required type="radio" name="estudios"  id="estudios" value="primarios"> Primarios. <br>
    <input required type="radio" name="estudios"  id="estudios" value="secundarios"> Secundarios. <br>
    <p>Sexo:</p>
    <select name="sexo" id="sexo" required>
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





    <input type="submit" value="Enviar">
</form>


<p><?php if (isset($mensaje)) { echo $mensaje; } ?></p>

</body>
</html>