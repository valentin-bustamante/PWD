
<?php
if (
    isset($_GET['lunes']) && isset($_GET['martes']) &&
    isset($_GET['miercoles']) && isset($_GET['jueves']) &&
    isset($_GET['viernes'])
) {
    
    $horas = [
        $_GET['lunes'],
        $_GET['martes'],
        $_GET['miercoles'],
        $_GET['jueves'],
        $_GET['viernes']
    ];
    $total = array_sum($horas);
    $mensaje = "<p>La cantidad total de horas cursadas en la semana es: <strong>$total</strong></p>";
} else {
    $mensaje = "<p>No se recibieron todos los datos.</p>";
}
include '../Vista/ejercicio2.php';
?>
