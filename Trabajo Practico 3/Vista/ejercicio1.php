<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar Archivo</title>
</head>
<body>
    <form action="../Control/control-ejercicio1.php" method="post" enctype="multipart/form-data">
        <label for="archivo">Selecciona un archivo:</label>
        <input type="file" id="archivo" name="archivo" accept=".doc,.pdf" required>
        <br><br>
        <input type="submit" value="Cargar Archivo">
    </form>

    <?php if (isset($mensaje)) { echo "<p>$mensaje</p>"; } ?>

</body>
</html>