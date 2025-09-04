
    <?php
    if (
        isset($_GET['nombre']) && isset($_GET['apellido']) &&
        isset($_GET['edad']) && isset($_GET['direccion']) &&
        isset($_GET['estudios']) && isset($_GET['sexo'])
    ) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];
        $direccion = $_GET['direccion'];
        $estudios = $_GET['estudios'];
        $sexo = $_GET['sexo'];
        
        if(isset($_GET["deportes"])){
            $deportes = $_GET['deportes'];
            $mensajeDeportes = "practico " . count($deportes) . " deporte/s.";
        } else {
            $mensajeDeportes = "no practico deportes.";
        }

        if($estudios == "primarios" || $estudios == "secundarios"){
            $mensajeEstudio = "mis estudios son " . $estudios;
        }else{
            $mensajeEstudio = "no tengo estudios";
        }


        if($edad >= 18){
            $mensaje = "Hola, soy "  . $nombre . ' ' . $apellido . ", vivo en " . $direccion . ", soy mayor de edad, " . $mensajeEstudio . ", mi sexo es " . $sexo . " y " . $mensajeDeportes;
        }else{
            $mensaje = "Hola, soy "  . $nombre . ' ' . $apellido . ", vivo en " . $direccion . ", soy menor de edad, " . $mensajeEstudio . ",mi sexo es " . $sexo . " y " . $mensajeDeportes;
        }

      } else {
        $mensaje = "No se recibieron todos los datos.";
    }
    include '../Vista/ejercicio6.php';
    ?>
