<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NATURFERA - CRM de Gestión</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --color-beige: #C5BEB5;
            --color-texto: #4A4A4A;
            --color-btn: #5D7A9A;
            --color-btn-hover: #4a637d;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #fcfcfc;
            color: var(--color-texto);
        }

        /* Encabezado Principal */
        .crm-header {
            background-color: var(--color-beige);
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .crm-title {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 600;
            letter-spacing: 2px;
            color: var(--color-texto);
            text-transform: uppercase;
        }

        /* Estilo de los Inputs y Selects */
        .form-control, .form-select {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 0.6rem;
            font-size: 0.95rem;
            transition: all 0.2s;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--color-beige);
            box-shadow: 0 0 0 3px rgba(197, 190, 181, 0.2);
        }

        /* Botones Personalizados */
        .btn-custom {
            background-color: var(--color-btn);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.6rem 1.2rem;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-custom:hover {
            background-color: var(--color-btn-hover);
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        /* Tabla Estilizada */
        .card-table {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,0.05);
        }

        .table-custom thead {
            background-color: var(--color-beige);
        }

        .table-custom th {
            color: var(--color-texto);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 1px;
            padding: 1.2rem 1rem;
            border: none;
        }

        .table-custom td {
            padding: 1rem;
            vertical-align: middle;
            color: #555;
            border-bottom: 1px solid #f1f1f1;
        }

        .id-badge {
            background-color: var(--color-btn);
            color: white;
            padding: 5px 10px;
            border-radius: 6px;
            font-weight: bold;
        }

        .btn-ver {
            border: 1px solid var(--color-btn);
            color: var(--color-btn);
            border-radius: 6px;
            padding: 4px 12px;
            text-decoration: none;
            font-size: 0.85rem;
            transition: 0.3s;
        }

        .btn-ver:hover {
            background-color: var(--color-btn);
            color: white;
        }
    </style>
</head>
<body>

    <header class="crm-header mb-4">
        <div class="container-fluid">
            <h1 class="crm-title text-center text-lg-start">NATURFERA</h1>
        </div>
    </header>

    <main class="container">
        <div class="row g-3 mb-5">
            <div class="col-md-3">
                <button class="btn btn-custom w-100">Ver_Talleres</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-custom w-100">Nuevo_Taller</button>
            </div>
            
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Taller">
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Dueño">
            </div>
            
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Contacto">
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option selected disabled>Seleccione Sector...</option>
                    <option value="1">Sector A</option>
                    <option value="2">Sector B</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option selected disabled>Seleccione Ciudad</option>
                    <option value="burgos">Burgos</option>
                    <option value="madrid">Madrid</option>
                </select>
            </div>
        </div>

        <div class="card card-table">
            <div class="table-responsive">
                <table class="table table-hover table-custom m-0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Taller</th>
                            <th>Dueño</th>
                            <th>Contacto</th>
                            <th>Teléfono</th>
                            <th>Ciudad</th>
                            <th class="text-center">Seguimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="id-badge">1</span></td>
                            <td>Taller Central Burgos</td>
                            <td>Manuel Fuentes</td>
                            <td>Contacto Directo</td>
                            <td>+34 600 000 000</td>
                            <td>Burgos</td>
                            <td class="text-center">
                                <a href="#" class="btn-ver">Ver</a>
                            </td>
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>