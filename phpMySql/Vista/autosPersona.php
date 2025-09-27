<?php ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>phpMySql</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">phpMySql</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="verAutos.php">Ver Autos</a></li>
        <li class="nav-item"><a class="nav-link" href="buscarAuto.php">Buscar Auto</a></li>
        <li class="nav-item"><a class="nav-link" href="listaPersonas.php">Lista Personas</a></li>
        <li class="nav-item"><a class="nav-link" href="nuevaPersona.php">Nueva Persona</a></li>
        <li class="nav-item"><a class="nav-link" href="nuevoAuto.php">Nuevo Auto</a></li>
        <li class="nav-item"><a class="nav-link" href="cambioDuenio.php">Cambio Dueño</a></li>
        <li class="nav-item"><a class="nav-link" href="buscarPersona.html">Buscar Persona</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">

        <h1>Buscar los autos registrados de una persona</h1>
        <form class="needs-validation" novalidate method="post" action="accion/accionAutosPersona.php">
        <table>
            <tr>
                <td>Ingrese un DNI:</td>
                <td><input class="form-control mb-2" type="number" name="NroDni" required></td>
            </tr>
            <tr>
                <td colspan="2"> <input class="form-control mb-2" type="submit" value="Buscar"></td>
            </tr>
        </table>
        </form>
        <footer class='main-footer'>
            <a href='index.html' class='footer-link'>
                ← Volver al menú principal
            </a>
        </footer>
    
</div>
<script>
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</body>
</html>
