<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-dark text-white text-center py-4">
                        <h4 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Editar Autor</h4>
                    </div>
                    <div class="card-body p-4">
                        <form id="formEditarAutor" action="<?= base_url('autores/actualizar/' . $autor['codigo_autor']) ?>" method="post"
                            class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="txt_id" class="form-label fw-semibold">Código Autor</label>
                                <input type="number" id="txt_id" name="codigo_autor" class="form-control"
                                    value="<?= $autor['codigo_autor'] ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="txt_ape" class="form-label fw-semibold">Apellido</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                                    <input type="text" name="txt_ape" id="txt_ape" class="form-control"
                                        value="<?= $autor['apellido'] ?>" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label fw-semibold">Nombre</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"
                                        value="<?= $autor['nombre'] ?>" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="txt_nac" class="form-label fw-semibold">Nacionalidad</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-flag"></i></span>
                                    <input type="text" name="txt_nac" id="txt_nac" class="form-control"
                                        value="<?= $autor['nacionalidad'] ?>" required>
                                </div>
                            </div>

                            <div
                                class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 mt-4 px-2">

                                <div class="d-flex gap-2 w-100 w-md-auto justify-content-center">
                                    <a href="javascript:history.back()" class="btn btn-secondary w-50 w-md-auto">
                                        <i class="bi bi-arrow-left-circle me-2"></i>Regresar
                                    </a>
                                    <a href="<?= base_url('autores') ?>" class="btn btn-outline-danger w-50 w-md-auto">
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

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // SweetAlert para guardar cambios
        const formEditar = document.getElementById('formEditarAutor');
        formEditar.addEventListener('submit', function(e) {
            e.preventDefault(); // evita el envío inmediato

            Swal.fire({
                title: 'Cambios guardados',
                text: 'Los datos del autor se han actualizado correctamente.',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            }).then(() => {
                formEditar.submit(); // envía el formulario después de cerrar alerta
            });
        });
    </script>
</body>

</html>
