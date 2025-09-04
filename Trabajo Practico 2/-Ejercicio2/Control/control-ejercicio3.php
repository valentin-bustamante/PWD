
    <?php
    if (
        isset($_POST['nombre']) && isset($_POST['apellido']) &&
        isset($_POST['edad']) && isset($_POST['direccion'])
    ) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];

       $mensaje = "Hola, soy "  . $nombre . ' ' . $apellido . ', tengo ' . $edad . ' años y vivo en ' . $direccion . ".";
    } else {
        $mensaje = "No se recibieron todos los datos.";
    }
    include '../Vista/ejercicio3.php';
    ?>
