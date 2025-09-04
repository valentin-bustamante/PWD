
    <?php
    if (
        isset($_GET['nombre']) && isset($_GET['apellido']) &&
        isset($_GET['edad']) && isset($_GET['direccion'])
    ) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];
        $direccion = $_GET['direccion'];

        if($edad >= 18 ){
            $mensaje = "Hola, soy "  . $nombre . ' ' . $apellido . ", vivo en " . $direccion . " y soy mayor de edad.";
        }
        else{
            $mensaje = "Hola, soy "  . $nombre . ' ' . $apellido . ", vivo en " . $direccion . " y soy menor de edad.";
        }

      } else {
        $mensaje = "No se recibieron todos los datos.";
    }
    include '../Vista/ejercicio4.php';
    ?>
