<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <div class="container py-5">
        <!-- Encabezado -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-dark">
                <i class="bi bi-journal-bookmark-fill me-2"></i>
                Sistema de Biblioteca
            </h1>
            <p class="text-muted">Bienvenido al sistema de gestión de la biblioteca</p>
        </div>

        <!-- Tarjetas de acceso rápido -->
        <div class="row g-4">
            <div class="col-md-4">
                <a href="<?= base_url('estudiantes'); ?>" class="text-decoration-none">
                    <div class="card shadow-sm border-0 rounded-4 h-100 text-center p-4">
                        <i class="bi bi-people-fill display-4 text-primary mb-3"></i>
                        <h5 class="fw-bold">Estudiantes</h5>
                        <p class="text-muted">Gestionar estudiantes y sus grados.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="<?= base_url('libros'); ?>" class="text-decoration-none">
                    <div class="card shadow-sm border-0 rounded-4 h-100 text-center p-4">
                        <i class="bi bi-book-fill display-4 text-success mb-3"></i>
                        <h5 class="fw-bold">Libros</h5>
                        <p class="text-muted">Administrar los libros disponibles.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="<?= base_url('prestamos'); ?>" class="text-decoration-none">
                    <div class="card shadow-sm border-0 rounded-4 h-100 text-center p-4">
                        <i class="bi bi-journal-arrow-up display-4 text-warning mb-3"></i>
                        <h5 class="fw-bold">Préstamos</h5>
                        <p class="text-muted">Control de préstamos y devoluciones.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="<?= base_url('autores'); ?>" class="text-decoration-none">
                    <div class="card shadow-sm border-0 rounded-4 h-100 text-center p-4">
                        <i class="bi bi-person-badge-fill display-4 text-danger mb-3"></i>
                        <h5 class="fw-bold">Autores</h5>
                        <p class="text-muted">Registro y consulta de autores.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="<?= base_url('editoriales'); ?>" class="text-decoration-none">
                    <div class="card shadow-sm border-0 rounded-4 h-100 text-center p-4">
                        <i class="bi bi-building display-4 text-info mb-3"></i>
                        <h5 class="fw-bold">Editoriales</h5>
                        <p class="text-muted">Gestión de editoriales de libros.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="<?= base_url('empleados'); ?>" class="text-decoration-none">
                    <div class="card shadow-sm border-0 rounded-4 h-100 text-center p-4">
                        <i class="bi bi-person-workspace display-4 text-secondary mb-3"></i>
                        <h5 class="fw-bold">Empleados</h5>
                        <p class="text-muted">Administrar personal de la biblioteca.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
