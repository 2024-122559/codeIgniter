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
    <div class="container py-4">
        <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
            <div class="card-header bg-dark text-white py-3">
                <h1 class="h4 mb-0 text-center"><i class="bi bi-people-fill me-2"></i>Listado de Autores</h1>
            </div>
            <div class="card-body p-3 p-md-4">
                <!-- Botón para abrir el modal -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <button type="button" class="btn btn-warning btn-lg px-3 px-md-4 shadow-sm" data-bs-toggle="modal"
                        data-bs-target="#modalAgregar">
                        <i class="bi bi-plus-circle-fill me-2"></i>Nuevo Autor
                    </button>
                </div>

                <!-- Tabla de autores -->
                <div class="table-responsive rounded-4 overflow-hidden mb-3">
                    <table class="table table-bordered table-striped table-hover align-middle mb-0">
                        <thead class="table-dark text-center">
                            <tr>
                                <th class="p-2 p-md-3">Código Autor</th>
                                <th class="p-2 p-md-3">Apellido</th>
                                <th class="p-2 p-md-3">Nombre</th>
                                <th class="p-2 p-md-3">Nacionalidad</th>
                                <th class="p-2 p-md-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos as $autor): ?>
                            <tr>
                                <td class="p-2 p-md-3"><?= $autor['codigo_autor']; ?></td>
                                <td class="p-2 p-md-3"><?= $autor['apellido']; ?></td>
                                <td class="p-2 p-md-3"><?= $autor['nombre']; ?></td>
                                <td class="p-2 p-md-3"><?= $autor['nacionalidad']; ?></td>
                                <td class="text-center p-2 p-md-3 ">
                                    <div class="d-flex justify-content-center gap-2">
                                        <!-- Enlace para Editar -->
                                        <a href="<?=base_url('autores/editar/'.$autor['codigo_autor'])?>" class="link-primary text-decoration-none fw-semibold">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                        <!-- Enlace para Eliminar -->
                                        <a href="<?= base_url('autores/eliminar/'.$autor['codigo_autor']); ?>"
                                            class="link-danger text-decoration-none fw-semibold">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para agregar autor -->
    <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content border-0 shadow-sm rounded-4">
                <div class="modal-header bg-warning text-white">
                    <h1 class="modal-title fs-5" id="modalAgregarLabel">
                        <i class="bi bi-person-plus-fill me-2"></i>Agregar Autor
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Cerrar"></button>
                </div>
                <div class="modal-body p-3 p-md-4">
                    <form action="<?= base_url('autores/agregar') ?>" method="post">
                        <div class="mb-3">
                            <label for="txt_id" class="form-label fw-semibold">Código Autor</label>
                            <input type="number" name="txt_id" id="txt_id" class="form-control form-control-lg"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_ape" class="form-label fw-semibold">Apellido</label>
                            <input type="text" name="txt_ape" id="txt_ape" class="form-control form-control-lg"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_nombre" class="form-label fw-semibold">Nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control form-control-lg"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_nac" class="form-label fw-semibold">Nacionalidad</label>
                            <input type="text" name="txt_nac" id="txt_nac" class="form-control form-control-lg"
                                required>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button type="button" class="btn btn-outline-danger btn-lg px-3 px-md-4"
                                data-bs-dismiss="modal">
                                <i class="bi bi-x-circle-fill me-2"></i>Cancelar
                            </button>
                            <button type="submit" class="btn btn-success btn-lg px-3 px-md-4">
                                <i class="bi bi-save-fill me-2"></i>Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>