<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <div class="container mt-5 p-4 shadow rounded bg-white">
        <div class="alert alert-dark text-center mb-4" role="alert">
            <h1 class="h3 mb-0"><i class="bi bi-people"></i> Listado de Autores</h1>
        </div>

        <!-- Botón para abrir el modal -->
        <div class="text-end mb-3">
            <button type="button" class="btn btn-warning btn-lg shadow-sm" data-bs-toggle="modal"
                data-bs-target="#modalAgregar">
                <i class="bi bi-plus-circle"></i> Nuevo Autor
            </button>
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
                        <form action="<?= base_url('autores/agregar') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_id" class="form-label">Código Autor</label>
                                <input type="number" name="txt_id" id="txt_id" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="txt_ape" class="form-label">Apellido</label>
                                <input type="text" name="txt_ape" id="txt_ape" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label">Nombre</label>
                                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="txt_nac" class="form-label">Nacionalidad</label>
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
                    <?php foreach ($datos as $autor): ?>
                    <tr>
                        <td><?= $autor['codigo_autor']; ?></td>
                        <td><?= $autor['apellido']; ?></td>
                        <td><?= $autor['nombre']; ?></td>
                        <td><?= $autor['nacionalidad']; ?></td>
                        <td class="text-center">
                            <!-- Botón Editar -->
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalEditar<?= $autor['codigo_autor']; ?>">
                                <i class="bi bi-pencil"></i>
                            </button>

                            <!-- Botón Eliminar -->
                            <a href="<?= base_url('autores/eliminar/'.$autor['codigo_autor']); ?>"
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