<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>

<form action="../Control/control-ejercicio7.php" method="get">

    <input required type="text" name="num1" id="num1" placeholder="Ingrese un numero"> <br>
    <input required type="text" name="num2" id="num2" placeholder="Ingrese otro numero"> <br>
    
    <select name="operacion" id="operacion" required>
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
</html>