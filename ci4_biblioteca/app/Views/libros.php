<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <div class="container py-4">
        <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
            <div class="card-header bg-dark text-white py-3">
                <h1 class="h4 mb-0 text-center"><i class="bi bi-book-fill me-2"></i>Listado de Libros</h1>
            </div>
            <div class="card-body p-3 p-md-4">
                <!-- Botón para abrir el modal -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <button type="button" class="btn btn-warning btn-lg px-3 px-md-4 shadow-sm" data-bs-toggle="modal"
                        data-bs-target="#modalAgregar">
                        <i class="bi bi-plus-circle-fill me-2"></i>Nuevo Libro
                    </button>
                </div>

                <!-- Tabla de libros -->
                <div class="table-responsive rounded-4 overflow-hidden mb-3">
                    <table class="table table-bordered table-striped table-hover align-middle mb-0">
                        <thead class="table-dark text-center">
                            <tr>
                                <th class="p-2 p-md-3">Código Libro</th>
                                <th class="p-2 p-md-3">Código Autor</th>
                                <th class="p-2 p-md-3">Código Editorial</th>
                                <th class="p-2 p-md-3">Título</th>
                                <th class="p-2 p-md-3">No. Páginas</th>
                                <th class="p-2 p-md-3">Tamaño</th>
                                <th class="p-2 p-md-3">Precio</th>
                                <th class="p-2 p-md-3">Estado</th>
                                <th class="p-2 p-md-3">Edición</th>
                                <th class="p-2 p-md-3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($datos as $libro): ?>
                            <tr>
                                <td class="p-2 p-md-3"><?= $libro['codigo_libro']; ?></td>
                                <td class="p-2 p-md-3"><?= $libro['codigo_autor']; ?></td>
                                <td class="p-2 p-md-3"><?= $libro['codigo_editorial']; ?></td>
                                <td class="p-2 p-md-3"><?= $libro['titulo']; ?></td>
                                <td class="p-2 p-md-3"><?= $libro['numero_paginas']; ?></td>
                                <td class="p-2 p-md-3"><?= $libro['tamanio']; ?></td>
                                <td class="p-2 p-md-3"><?= $libro['precio']; ?></td>
                                <td class="p-2 p-md-3"><?= $libro['estado']; ?></td>
                                <td class="p-2 p-md-3"><?= $libro['edicion']; ?></td>
                                <td class="text-center p-2 p-md-3">
                                    <div class="d-flex justify-content-center gap-2">
                                        <!-- Enlace para Editar -->
                                        <a href="<?= base_url('libros/editar/'.$libro['codigo_libro']) ?>"
                                            class="link-primary text-decoration-none fw-semibold">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                        <!-- Enlace para Eliminar -->
                                        <a href="<?= base_url('libros/eliminar/'.$libro['codigo_libro']); ?>"
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

    <!-- Modal para agregar libro -->
    <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content border-0 shadow-sm rounded-4">
                <div class="modal-header bg-warning text-white">
                    <h1 class="modal-title fs-5" id="modalAgregarLabel">
                        <i class="bi bi-bookmark-plus-fill me-2"></i>Agregar Libro
                    </h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Cerrar"></button>
                </div>
                <div class="modal-body p-3 p-md-4">
                    <form action="<?= base_url('libros/agregar') ?>" method="post">
                        <div class="mb-3">
                            <label for="txt_id" class="form-label fw-semibold">Código Libro</label>
                            <input type="number" name="txt_id" id="txt_id" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_autor" class="form-label fw-semibold">Código Autor</label>
                            <input type="number" name="txt_autor" id="txt_autor" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_edi" class="form-label fw-semibold">Código Editorial</label>
                            <input type="number" name="txt_edi" id="txt_edi" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_titulo" class="form-label fw-semibold">Título</label>
                            <input type="text" name="txt_titulo" id="txt_titulo" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_paginas" class="form-label fw-semibold">No. Páginas</label>
                            <input type="number" name="txt_paginas" id="txt_paginas" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_tamaño" class="form-label fw-semibold">Tamaño</label>
                            <input type="text" name="txt_tamaño" id="txt_tamaño" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_precio" class="form-label fw-semibold">Precio</label>
                            <input type="number" name="txt_precio" id="txt_precio" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_estado" class="form-label fw-semibold">Estado</label>
                            <input type="number" name="txt_estado" id="txt_estado" class="form-control form-control-lg" required>
                        </div>
                        <div class="mb-3">
                            <label for="txt_edicion" class="form-label fw-semibold">Edición</label>
                            <input type="number" name="txt_edicion" id="txt_edicion" class="form-control form-control-lg" required>
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
