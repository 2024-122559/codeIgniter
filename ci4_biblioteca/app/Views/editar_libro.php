<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-dark text-white text-center py-4">
                        <h4 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Editar Libro</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="<?= base_url('libros/actualizar/' . $libro['codigo_libro']) ?>" method="post"
                            class="needs-validation" novalidate>

                            <div class="mb-3">
                                <label for="txt_codigo" class="form-label fw-semibold">Código Libro</label>
                                <input type="number" id="txt_codigo" name="txt_codigo" class="form-control"
                                    value="<?= $libro['codigo_libro'] ?>" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="txt_autor" class="form-label fw-semibold">Código Autor</label>
                                <input type="number" id="txt_autor" name="txt_autor" class="form-control"
                                    value="<?= $libro['codigo_autor'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="txt_edi" class="form-label fw-semibold">Código Editorial</label>
                                <input type="number" id="txt_edi" name="txt_edi" class="form-control"
                                    value="<?= $libro['codigo_editorial'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="txt_titulo" class="form-label fw-semibold">Título</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-book"></i></span>
                                    <input type="text" id="txt_titulo" name="txt_titulo" class="form-control"
                                        value="<?= $libro['titulo'] ?>" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="txt_paginas" class="form-label fw-semibold">Número de Páginas</label>
                                <input type="number" id="txt_paginas" name="txt_paginas" class="form-control"
                                    value="<?= $libro['numero_paginas'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="txt_tamaño" class="form-label fw-semibold">Tamaño</label>
                                <input type="text" id="txt_tamaño" name="txt_tamaño" class="form-control"
                                    value="<?= $libro['tamanio'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="txt_precio" class="form-label fw-semibold">Precio</label>
                                <input type="number" step="0.01" id="txt_precio" name="txt_precio" class="form-control"
                                    value="<?= $libro['precio'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="txt_estado" class="form-label fw-semibold">Estado</label>
                                <input type="text" id="txt_estado" name="txt_estado" class="form-control"
                                    value="<?= $libro['estado'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="txt_edicion" class="form-label fw-semibold">Edición</label>
                                <input type="number" id="txt_edicion" name="txt_edicion" class="form-control"
                                    value="<?= $libro['edicion'] ?>" required>
                            </div>

                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 mt-4 px-2">
                                <div class="d-flex gap-2 w-100 w-md-auto justify-content-center">
                                    <a href="javascript:history.back()" class="btn btn-secondary w-50 w-md-auto">
                                        <i class="bi bi-arrow-left-circle me-2"></i>Regresar
                                    </a>
                                    <a href="<?= base_url('libros') ?>" class="btn btn-outline-danger w-50 w-md-auto">
                                        <i class="bi bi-x-circle-fill me-2"></i>Cancelar
                                    </a>
                                </div>
                                <button type="submit" class="btn btn-success w-100 w-md-auto">
                                    <i class="bi bi-save-fill me-2"></i>Guardar Cambios
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>