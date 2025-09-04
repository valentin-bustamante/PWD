<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros</title>
     <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
</head>
<body>
    

<form action="../Control/control-ejercicio1.php" method="post" id="form">
    <input required type="number" name="numero" id="numero" placeholder="Ingrese un número"> <br>
    <input type="submit" value="Verificar." id="submit">
    <div id="error"></div>
</form>

</body>

<script>

$(document).ready(function () {
        $("#form").validate({
            rules: {
                numero: { required: true, number: true }
            },
            messages: {
                numero: { required: "Ingrese un numero", number: "Debe ser un número" }
            }, 
            errorPlacement: function(error, element) {
                        error.appendTo("#error")
                    }
        })
    });

</script>

</html>