<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>

<form action="../Control/control-ejercicio8.php" method="get">
    <input required type="number" name="edad" placeholder="Ingrese su edad:">
    <p> ¿Sos estudiante?<br>
     <input required type="radio" name="estudios" value="true"> Si. <br>
     <input required type="radio" name="estudios" value="false"> No. <br>

     
     <input type="submit" value="Enviar">
    </form>

<form action="../Vista/ejercicio8.php" method="get">
    <input type="submit" value="Limpiar Form">
</form>
    

<p><?php if (isset($mensaje)) { echo $mensaje; } ?></p>

</body>
</html>