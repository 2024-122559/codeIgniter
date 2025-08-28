<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="card p-4 shadow" style="min-width: 350px;">
        <h2 class="card-title text-center mb-4">Iniciar Sesión</h2>
        <form action="<?=base_url('login')?>" method="post">
          <div class="mb-3">
            <label for="txt_usu" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="txt_usu" name="txt_usu" placeholder="Ingresa tu usuario">
          </div>
          <div class="mb-3">
            <label for="txt_pass" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="txt_pass" name="txt_pass" placeholder="Ingresa tu contraseña">
          </div>
          <button type="submit" class="btn btn-success w-100">Iniciar Sesión</button>
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
