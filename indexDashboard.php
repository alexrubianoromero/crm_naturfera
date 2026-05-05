<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#C5BEB5">
    <title>CRM Naturfera | Gestión de Contactos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --natur-beige: #C5BEB5;
            --natur-dark: #4A4A4A;
            --natur-accent: #5D7A9A;
            --natur-bg: #F9F8F7;
        }

        body {
            background-color: var(--natur-bg);
            font-family: 'Inter', sans-serif;
            color: var(--natur-dark);
        }

        /* Header Estilo Corporativo */
        .crm-navbar {
            background-color: var(--natur-beige);
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }

        .brand-text {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            letter-spacing: 2px;
            color: var(--natur-dark);
            text-transform: uppercase;
        }

        /* Tarjetas de Filtros */
        .filter-section {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
            margin-top: -20px;
            border: 1px solid rgba(197, 190, 181, 0.3);
        }

        .form-control, .form-select {
            border: 1px solid #E0DEDC;
            border-radius: 10px;
            padding: 12px;
            background-color: #FDFDFD;
        }

        .form-control:focus {
            border-color: var(--natur-beige);
            box-shadow: 0 0 0 3px rgba(197, 190, 181, 0.2);
        }

        /* Botones con estilo */
        .btn-natur {
            background-color: var(--natur-accent);
            color: white;
            border-radius: 10px;
            padding: 12px 25px;
            font-weight: 600;
            border: none;
            transition: all 0.3s;
        }

        .btn-natur:hover {
            background-color: #4A627A;
            transform: translateY(-2px);
            color: white;
        }

        .btn-outline-natur {
            border: 2px solid var(--natur-beige);
            color: var(--natur-dark);
            border-radius: 10px;
            font-weight: 600;
        }

        /* Tabla Estilo Boutique */
        .table-container {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
            border: 1px solid rgba(0,0,0,0.02);
        }

        .table thead {
            background-color: var(--natur-beige);
        }

        .table thead th {
            color: var(--natur-dark);
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 1px;
            padding: 20px;
            border: none;
        }

        .table tbody tr {
            transition: background 0.2s;
        }

        .table tbody tr:hover {
            background-color: #F4F2F0;
        }

        .status-badge {
            background-color: var(--natur-beige);
            color: var(--natur-dark);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <!-- <nav class="navbar crm-navbar shadow-sm py-3">
        <div class="container">
            <span class="brand-text">Naturfera <small style="font-size: 0.6rem; font-family: 'Inter';">CRM</small></span>
            <div class="d-flex align-items-center">
                <span class="me-3 d-none d-md-inline">Bienvenida, <strong>Raquel</strong></span>
                <i class="bi bi-person-circle fs-4"></i>
            </div>
        </div>
    </nav> -->

    <nav class="navbar crm-navbar shadow-sm py-3">
        <div class="container d-flex flex-column flex-md-row align-items-center">
            <div class="d-flex w-100 justify-content-between align-items-center d-md-block w-md-auto">
                <span class="brand-text">Naturfera <small style="font-size: 0.6rem; font-family: 'Inter';">CRM</small></span>
                
                <div class="d-md-none">
                    <i class="bi bi-person-circle fs-3"></i>
                </div>
            </div>

            <div class="mt-2 mt-md-0 d-flex align-items-center">
                <span class="me-3">Bienvenida, <strong style="color: var(--natur-dark);">Raquel</strong></span>
                <i class="bi bi-person-circle fs-4 d-none d-md-inline"></i>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="filter-section mb-5">
            <div class="row g-3 align-items-end">
                <div class="col-md-3">
                    <label class="form-label small fw-bold text-muted">Búsqueda de Contacto</label>
                    <input type="text" class="form-control" placeholder="Nombre o Dueño...">
                </div>
                <div class="col-md-3">
                    <label class="form-label small fw-bold text-muted">Ciudad / Ubicación</label>
                    <select class="form-select">
                        <option>Burgos</option>
                        <option>Torresandino</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label small fw-bold text-muted">Sector de Interés</label>
                    <select class="form-select">
                        <option>Humus de Lombriz</option>
                        <option>Agricultura Rural</option>
                    </select>
                </div>
                <div class="col-md-3 d-flex gap-2">
                    <button class="btn btn-natur w-100"><i class="bi bi-search me-2"></i>Filtrar</button>
                    <!-- <button class="btn btn-outline-natur w-100" data-bs-toggle="modal" data-bs-target="#modalNuevo"><i class="bi bi-plus-lg me-2"></i>Nuevo</button> -->
                    <button class="btn btn-outline-natur w-100" data-bs-toggle="modal" data-bs-target="#modalNuevoTaller">
                      <i class="bi bi-plus-lg me-2"></i>Nuevo Contacto
                    </button>
                </div>
            </div>
        </div>

        <div class="table-container mb-5">

            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Contacto/ Empresa</th>
                        <th>Dueño</th>
                        <th>Contacto Principal</th>
                        <th>Ciudad</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="status-badge">01</span></td>
                        <td class="fw-bold">Contacto Orgánico Torresandino</td>
                        <td>Manel Fuentes</td>
                        <td><i class="bi bi-telephone me-2"></i>+34 600 000 000</td>
                        <td>Burgos</td>
                        <td class="text-center">
                            <!-- <button class="btn btn-sm btn-light border" title="Ver detalle"><i class="bi bi-eye"></i></button> -->
                            <button onclick="verDetalle(4)" class="btn-ver" title="Ver Expediente">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button class="btn btn-sm btn-light border text-danger" title="Eliminar"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <div class="modal fade" id="modalNuevoTaller" tabindex="-1" aria-labelledby="modalNuevoTallerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 15px; border: none; overflow: hidden;">
                
                <div class="modal-header" style="background-color: var(--natur-beige); border: none;">
                    <h5 class="modal-title fw-bold text-uppercase" id="modalNuevoTallerLabel" style="letter-spacing: 1px; font-size: 1rem;">
                        <i class="bi bi-house-add me-2"></i>Registrar Nuevo Contacto
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body p-4">
                    <form action="procesar_taller.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">Nombre del Contacto / Empresa</label>
                            <input type="text" name="nombre_taller" class="form-control" placeholder="Ej:  Orgánico del Duero" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-bold text-muted">Nombre del Dueño</label>
                                <input type="text" name="dueno" class="form-control" placeholder="Nombre completo" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label small fw-bold text-muted">Teléfono / WhatsApp</label>
                                <input type="tel" name="telefono" class="form-control" placeholder="+34..." required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">Ciudad</label>
                            <select name="ciudad" class="form-select" required>
                                <option value="" selected disabled>Seleccione ubicación...</option>
                                <option value="Burgos">Burgos</option>
                                <option value="Torresandino">Torresandino</option>
                                <option value="Aranda de Duero">Aranda de Duero</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">Notas de Seguimiento Inicial</label>
                            <textarea name="notas" class="form-control" rows="3" placeholder="¿Qué le interesa a este cliente?"></textarea>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-natur">
                                <i class="bi bi-check-circle me-2"></i>Guardar en CRM
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalDetalleTaller" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="border-radius: 20px; border: none;">
                <div id="contenidoDetalle">
                    <div class="p-5 text-center">
                        <div class="spinner-border text-secondary" role="status"></div>
                        <p class="mt-2 text-muted">Cargando expediente...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
<script>
    function verDetalle(id) {
    // 1. Mostrar el modal (vacío con el spinner)
    var myModal = new bootstrap.Modal(document.getElementById('modalDetalleTaller'));
    myModal.show();

    // 2. Llamar al servidor
    fetch('ver_detalle.php?id=' + id)
        .then(response => response.text())
        .then(html => {
            // 3. Inyectar el HTML recibido en el contenedor
            document.getElementById('contenidoDetalle').innerHTML = html;
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('contenidoDetalle').innerHTML = '<div class="p-4 text-danger">Error al cargar los datos.</div>';
        });
}
</script>