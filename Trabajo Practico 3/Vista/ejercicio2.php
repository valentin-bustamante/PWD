<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo txt</title>
</head>
<body>
    <form action="../Control/control-ejercicio2.php" method="post" enctype="multipart/form-data">
        <label for="archivo">Selecciona un archivo .txt:</label>
        <input type="file" id="archivo" name="archivo" accept=".txt" required>
        <br><br>
        <input type="submit" value="Cargar Archivo">
        <?php if (isset($mensaje)) { echo "<p>$mensaje</p>"; } ?>
    </form>
</body>
</html>