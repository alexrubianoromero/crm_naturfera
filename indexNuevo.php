<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyunkia Taxis - Control de Recaudo</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --color-beige: #C5BEB5;
            --color-texto: #4A4A4A;
        }

        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Navbar Estilo Naturfera */
        .navbar-custom {
            background-color: var(--color-beige) !important;
            padding: 1.2rem 0;
            border-bottom: 2px solid rgba(0,0,0,0.05);
        }

        .navbar-custom .nav-link {
            color: var(--color-texto) !important;
            font-size: 20px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            padding: 0.5rem 1.5rem !important;
            transition: all 0.3s ease;
        }

        .navbar-custom .nav-link:hover {
            color: #000000 !important;
            transform: translateY(-2px);
        }

        /* Ajuste para centrar menú en pantallas grandes */
        @media (min-width: 992px) {
            .navbar-nav {
                width: 100%;
                justify-content: center;
            }
        }

        /* Estilo para el contenido principal */
        .hero-section {
            padding: 60px 0;
            text-align: center;
        }

        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Conductores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recaudo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container hero-section">
        <h1 class="display-4 fw-bold" style="color: var(--color-texto);">Hyunkia Taxis</h1>
        <p class="lead">Sistema centralizado de recaudo diario y control de flota.</p>
        <hr class="my-4" style="width: 100px; margin: auto; border-top: 3px solid var(--color-beige);">
        
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card card-custom p-4">
                    <h3>Recaudo Diario</h3>
                    <p>Gestione los ingresos de cada conductor de forma rápida.</p>
                    <a href="#" class="btn btn-dark">Ingresar Datos</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-custom p-4">
                    <h3>Alertas</h3>
                    <p>Control de vencimientos de SOAT y Tecnomecánica.</p>
                    <a href="#" class="btn btn-outline-secondary">Ver Alertas</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-custom p-4">
                    <h3>Informes</h3>
                    <p>Reportes detallados por vehículo y conductor.</p>
                    <a href="#" class="btn btn-outline-secondary">Generar PDF</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>