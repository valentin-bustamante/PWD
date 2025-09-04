<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
 <?php
    
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        if ($numero > 0) {
            $mensaje = "El número $numero es positivo.";
        } elseif ($numero < 0) {
            $mensaje = "El número $numero es negativo.";
        } else {
            $mensaje = "El número es cero.";
        }
    } else {
        $mensaje = "No se recibió ningún número.";
    }
    echo $mensaje

?>
    <br><br>
    <a href="../Vista/ejercicio1.php">Volver</a>

</body>
</html>



















