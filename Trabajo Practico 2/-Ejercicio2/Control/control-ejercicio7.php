
    <?php
    if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operacion'])){
       $num1 = $_GET['num1'];
       $num2 = $_GET['num2'];
       $operacion = $_GET['operacion'];


if(is_numeric($num1) && is_numeric($num2)){
switch ($operacion) {
    case '+':
        $resultado = $num1 + $num2;
        break;

    case '-':
        $resultado = $num1 - $num2;
        break;

    case '*':
        $resultado = $num1 * $num2;
        break;

    case '/':
        if($num2 == 0){
            $resultado = "Operación no válida";
        }else{
            $resultado = $num1 / $num2;
        }
        break;

    default:
        $resultado = "Operación no válida.";
        break;
}
    $mensaje = $num1 . " " . $operacion . " " . $num2 . " = " . $resultado;
        }else{
    $mensaje = "Los datos deben ser numericos.";
    }



      } else {
        $mensaje = "No se recibieron todos los datos.";
    }
    include '../Vista/ejercicio7.php';
    ?>
