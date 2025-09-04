
    <?php
    if (isset($_GET['estudios']) && isset($_GET['edad'])){
        $estudios = $_GET['estudios'];
        $edad = $_GET['edad'];
        $precio = 0;

        if($estudios == "true" && $edad < 12){
            $precio = 160;
        }elseif($estudios == "true" && $edad >= 12 ){
            $precio = 180;
        }else{
            $precio = 300;
        }


        if(isset($_GET['reset'])){
        $mensaje = " ";
        }else{
        $mensaje = $precio;
        }


      } else {
        $mensaje = "No se recibieron todos los datos.";
    }
    include '../Vista/ejercicio8.php';
    ?>
