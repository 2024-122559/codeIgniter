<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
</head>
<body class="bg-light">
    <div class="container mt-5 p-4 shadow rounded bg-white">
        <div class="alert alert-dark text-center mb-4" role="alert">
            <h1 class="h3 mb-0">Listado de Libros</h1>
        </div>

        <!-- boton para abrir modal-->
         <div class="text-end mb-3">
            <button type="button" class="btn btn-warning btn-Ig shadow-sm" data-bs-toggle = "modal"
               data-bs-target="#modalAgregar">
               <i class="bi bi-plus-circle"></i> Nuevo Libro
            </button>
        </div>
    </div>

    <!-- Modal -->
        <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header bg-warning text-white">
                        <h1 class="modal-title fs-5" id="modalAgregarLabel"><i class="bi bi-person-plus"></i> Agregar
                            Autor</h1>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="txt_id" class="form-label">Código Libro</label>
                                <input type="number" name="txt_id" id="txt_id" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="txt_ape" class="form-label">Codigo Autor</label>
                                <input type="text" name="txt_ape" id="txt_ape" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label">Codigo Editorial</label>
                                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="txt_nac" class="form-label">Titulo</label>
                                <input type="text" name="txt_nac" id="txt_nac" class="form-control" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                                    <i class="bi bi-x-circle"></i> Cancelar
                                </button>
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-save"></i> Guardar
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Código Autor</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Nacionalidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $libro): ?>
                    <tr>
                        <td><?= $libro['codigo_autor']; ?></td>
                        <td><?= $libro['apellido']; ?></td>
                        <td><?= $libro['nombre']; ?></td>
                        <td><?= $libro['nacionalidad']; ?></td>
                        <td class="text-center">
                            <!-- Botón Editar -->
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalEditar<?= $libro['codigo_autor']; ?>">
                                <i class="bi bi-pencil"></i>
                            </button>

                            <!-- Botón Eliminar -->
                            <a href=""
                                class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>