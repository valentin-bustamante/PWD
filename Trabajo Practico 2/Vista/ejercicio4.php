<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cinem@s - Cargar Película</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap solo para estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <nav class="navbar navbar-light bg-light mb-4">
        <span class="navbar-brand mb-0 h1"><img src="https://cdn-icons-png.flaticon.com/512/1170/1170678.png" width="24" alt="logo"> Cinem@s</span>
    </nav>
    <form action="../Control/control-ejercicio4.php" method="post">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
            </div>
            <div class="col-md-6">
                <label for="actores" class="form-label">Actores</label>
                <input type="text" class="form-control" id="actores" name="actores" placeholder="Actores" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" name="director" placeholder="Director" required>
            </div>
            <div class="col-md-6">
                <label for="guion" class="form-label">Guión</label>
                <input type="text" class="form-control" id="guion" name="guion" placeholder="Guión" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="produccion" class="form-label">Producción</label>
                <input type="text" class="form-control" id="produccion" name="produccion" placeholder="Producción" required>
            </div>
            <div class="col-md-3">
                <label for="anio" class="form-label">Año</label>
                <input type="text" class="form-control" id="anio" name="anio" maxlength="4" pattern="\d{4}" placeholder="Año" required>
            </div>
            <div class="col-md-3">
                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">
                <label for="duracion" class="form-label">Duración (minutos)</label>
                <input type="text" class="form-control" id="duracion" name="duracion" maxlength="3" pattern="\d{1,3}" placeholder="Duración" required>
            </div>
            <div class="col-md-5">
                <label class="form-label">Restricciones de edad</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restriccion" id="publico" value="Todo Público" required>
                        <label class="form-check-label" for="publico">Todo Público</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restriccion" id="mayores7" value="Mayores de 7 años">
                        <label class="form-check-label" for="mayores7">Mayores de 7 años</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restriccion" id="mayores18" value="Mayores de 18 años">
                        <label class="form-check-label" for="mayores18">Mayores de 18 años</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3" required></textarea>
        </div>
        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-secondary">Borrar</button>
        </div>
    </form>

    <?php if (isset($errores) && count($errores) > 0): ?>
        <div class="alert alert-danger mt-4">
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        
    <?php endif; ?>

    <?php if (isset($datos) && count($datos) > 0 && (!isset($errores) || count($errores) === 0)): ?>
        <div class="alert alert-success mt-4" style="background-color: #e6f4e6;">
            <h2 class="text-primary">La película introducida es</h2>
            <p><strong>Título:</strong> <?= htmlspecialchars($datos['titulo']) ?></p>
            <p><strong>Actores:</strong> <?= htmlspecialchars($datos['actores']) ?></p>
            <p><strong>Director:</strong> <?= htmlspecialchars($datos['director']) ?></p>
            <p><strong>Guión:</strong> <?= htmlspecialchars($datos['guion']) ?></p>
            <p><strong>Producción:</strong> <?= htmlspecialchars($datos['produccion']) ?></p>
            <p><strong>Año:</strong> <?= htmlspecialchars($datos['anio']) ?></p>
            <p><strong>Nacionalidad:</strong> <?= htmlspecialchars($datos['nacionalidad']) ?></p>
            <p><strong>Duración:</strong> <?= htmlspecialchars($datos['duracion']) ?></p>
            <p><strong>Restricciones de edad:</strong> <?= htmlspecialchars($datos['restriccion']) ?></p>
            <p><strong>Sinopsis:</strong> <?= htmlspecialchars($datos['sinopsis']) ?></p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>