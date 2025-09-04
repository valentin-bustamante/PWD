<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header text-center bg-primary text-white">
            <h4>Iniciar Sesión</h4>
          </div>
          <div class="card-body">
            <form id="loginForm" action="../Control/control-ejercicio3.php" method="POST" novalidate>
              <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
                <div class="invalid-feedback">Por favor ingrese su usuario.</div>
              </div>
              <div class="mb-3">
                <label for="clave" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="clave" name="clave" required>
                <div class="invalid-feedback">La contraseña es obligatoria.</div>
              </div>
              <button type="submit" class="btn btn-success w-100">Ingresar</button>
            </form>
            <?php if (isset($mensaje)): ?>
              <div class="alert alert-info mt-3 text-center"><?= $mensaje ?></div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const form = document.getElementById('loginForm');
    form.addEventListener('submit', function (e) {
      const usuario = form.usuario.value.trim();
      const clave = form.clave.value.trim();

      const esSegura = clave.length >= 8 &&
                       clave !== usuario &&
                       /[a-zA-Z]/.test(clave) &&
                       /\d/.test(clave);

      if (!form.checkValidity() || !esSegura) {
        e.preventDefault();
        form.classList.add('was-validated');
        if (!esSegura) {
          alert("La contraseña debe tener al menos 8 caracteres, contener letras y números, y no ser igual al usuario.");
        }
      }
    });
  </script>
</body>
</html>