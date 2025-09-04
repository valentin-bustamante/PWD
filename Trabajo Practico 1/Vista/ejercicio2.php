<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas</title>
</head>
<body>
    
<form action="../Control/control-ejercicio2.php" method="get">
    <input type="number" name="lunes" id="lunes" placeholder="Ingrese las horas del lunes"> <br>
    <input type="number" name="martes" id="martes" placeholder="Ingrese las horas del martes"> <br>
    <input type="number" name="miercoles" id="miercoles" placeholder="Ingrese las horas del miercoles"> <br>
    <input type="number" name="jueves" id="jueves" placeholder="Ingrese las horas del jueves"> <br>
    <input type="number" name="viernes" id="viernes" placeholder="Ingrese las horas del viernes"> <br>  
    <input type="submit" value="calcular">
</form>

<p><?php echo $mensaje; ?></p>

</body>
</html>