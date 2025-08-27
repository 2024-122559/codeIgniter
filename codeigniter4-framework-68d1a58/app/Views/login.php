<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-4 col-offset-4">
                <h1>Iniciar Sesion</h1>
                <form action="" method="post">
                    <label for="txt_usu" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="txt_usu" name="txt_usu">
                    <label for="txt_pass" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" id="txt_pass" name="txt_pass">
                    <button type="submit" class="form-control btn btn-secundary">Iniciar Sesion</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>