<?php
$raiz = dirname(dirname(dirname(__FILE__)));
// require_once($raiz.'/tractores/views/tractoresView.php');  
// require_once($raiz.'/clientes/views/clientesView.php');  
require_once($raiz.'/clientes/models/ClienteModel.php');  
require_once($raiz.'/clientes/models/SeguimientoModel.php');  
// require_once($raiz.'/clientes/models/ClienteModel.php');  
// require_once($raiz.'/tractores/models/TractorModel.php');  
class dashboardView
{
    protected $tractoresView;
    protected $clientesView;
    protected $ClienteModel;
    protected $clienteModel;
    protected $tractorModel;
    protected $seguimientoModel;

    public function __construct()
    {
        // $this->tractoresView = new tractoresView();
        // $this->clientesView = new clientesView();
        $this->clienteModel = new ClienteModel();
        $this->seguimientoModel = new SeguimientoModel();
        // $this->tractorModel = new TractorModel();
        // $this->clienteModel = new ClienteModel();
    }


    public function verDashboard()
    {
        ?>
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
                   <!-- <button onclick="mostrar();">mostrar</button> -->
            <div class="container mt-5">
                <div class="filter-section mb-5">
                    <div class="row g-3 align-items-end">
                        <div class="col-md-3">
                            <label class="form-label small fw-bold text-muted">Búsqueda de Contacto</label>
                            <input 
                                id="nombreABuscar"
                                type="text" class="form-control" placeholder="Nombre o Dueño..."
                                onkeyup="tablaResultadosOrdenesFiltroNombre();"
                            >
                        </div>
                        <div class="col-md-3">
                            <label class="form-label small fw-bold text-muted">Empresa</label>
                              <input 
                                id="empresaABuscar"
                                type="text" class="form-control" placeholder="Empresa"
                                onkeyup="tablaResultadosOrdenesFiltroEmpresa();"
                            >

                        </div>
                        <!-- <div class="col-md-3">
                            <label class="form-label small fw-bold text-muted">Sector de Interés</label>
                            <select class="form-select">
                                <option>Humus de Lombriz</option>
                                <option>Agricultura Rural</option>
                            </select>
                        </div> -->
                        <div class="col-md-4 d-flex gap-2">
                            <button class="btn btn-natur w-100"
                            data-bs-toggle="modal" data-bs-target="#modalFiltrar"
                            ><i class="bi bi-search me-2"></i>Filtrar</button>
                            <!-- <button class="btn btn-outline-natur w-100" data-bs-toggle="modal" data-bs-target="#modalNuevo"><i class="bi bi-plus-lg me-2"></i>Nuevo</button> -->
                            <button class="btn btn-outline-natur w-100" 
                            data-bs-toggle="modal" data-bs-target="#modalNuevoTaller"
                            onclick = "formularioNuevoContacto();"
                            >
                            <i class="bi bi-plus-lg me-2"></i>Nuevo Contacto
                            </button>
                             <button class="btn btn-warning w-100"
                                data-bs-toggle="modal" data-bs-target="#modalAlertas"
                                onclick="menuAlertas();"
                            ><i class="bi bi-bell me-2"></i>Alertas</button>
                        </div>
                    </div>
                </div>
                <div  id="div_resultados_dashboard">
                    
                <?php  
                    $clientes =    $this->clienteModel->traerClientes();
                    $this->tablaResultadosOrdenes($clientes);  
               
                    ?>
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
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                               onclick="tablaResultadosOrdenes();";
                            ></button>
                        </div>

                        <div class="modal-body p-4" id="modalBodyContactos">
                            <?php  $this->formularioNuevoContacto();  ?>
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

            <?php  
                $this->ventanaModelCodigoSeguimiento();
                $this->modalAlertas();
                $this->formularioNuevoContacto();
             ?>
    
        </body>
        </html>
        <script src="/crm_naturfera/dashboard/js/dashboard.js"></script>
        <script src="/crm_naturfera/clientes/js/clientes.js"></script>
        <script src="/crm_naturfera/alertas/js/alertas.js"></script>
        <script>
      
        <?php
    }

    public function formularioNuevoContacto()
    {
        ?>
                <div class="mb-3">
                                <label class="form-label small fw-bold text-muted">Nombre del Contacto</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej:  Jose Maria Garcia" required>
                                </div>

                                <div class="row">
                                    <div class=" mb-3">
                                        <label class="form-label small fw-bold text-muted">Empresa</label>
                                        <input type="text" name="empresa" id="empresa" class="form-control" placeholder="Empresa" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label small fw-bold text-muted">Cargo</label>
                                        <input type="text" name="cargo" id="cargo" class="form-control" placeholder="Cargo" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label small fw-bold text-muted">Teléfono / WhatsApp</label>
                                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="+34..." required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-muted">email</label>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label small fw-bold text-muted">Direccion</label>
                                        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="direccion" required>
                                    </div>
                                </div>

                                <!-- <div class="mb-3">
                                    <label class="form-label small fw-bold text-muted">Ciudad</label>
                                    <select name="ciudad" class="form-select" required>
                                        <option value="" selected disabled>Seleccione ubicación...</option>
                                        <option value="Burgos">Burgos</option>
                                        <option value="Torresandino">Torresandino</option>
                                        <option value="Aranda de Duero">Aranda de Duero</option>
                                    </select>
                                </div> -->

                                <div class="mb-3">
                                    <label class="form-label small fw-bold text-muted">Comentario</label>
                                    <textarea name="observaciones" id ="observaciones" class="form-control" rows="3" placeholder="¿Qué le interesa a este cliente?"></textarea>
                                </div>

                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-natur" onclick="grabarContactoCrm();">
                                        <i class="bi bi-check-circle me-2"></i>Guardar en CRM
                                    </button>
                                </div>
        <?php
    }

    public function modalAlertas()
    {
      ?>
      <div class="modal fade" id="modalAlertas" tabindex="-1" aria-labelledby="modalNuevoTallerLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content" style="border-radius: 15px; border: none; overflow: hidden;">
                        
                        <div class="modal-header" style="background-color: var(--natur-beige); border: none;">
                            <h5 class="modal-title fw-bold text-uppercase" id="modalNuevoTallerLabel" style="letter-spacing: 1px; font-size: 1rem;">
                                <i class="bi bi-house-add me-2"></i>Registrar Nuevo Contacto
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                               onclick="tablaResultadosOrdenes();";
                            ></button>
                        </div>

                        <div class="modal-body p-4" id="modalBodyAlertas">
                           
                                <div class="mb-3">
                                    <label class="form-label small fw-bold text-muted">Nombre del Contacto</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej:  Jose Maria Garcia" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label small fw-bold text-muted">Comentario</label>
                                    <textarea name="observaciones" id ="observaciones" class="form-control" rows="3" placeholder="¿Qué le interesa a este cliente?"></textarea>
                                </div>

                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-natur" onclick="grabarContactoCrm();">
                                        <i class="bi bi-check-circle me-2"></i>Guardar en CRM
                                    </button>
                                </div>
                  
                        </div>
                    </div>
                </div>
            </div>
      <?php  
    }




    public function tablaResultadosOrdenes($clientes)
    {
        ?>
         <div class="table-container mb-5"  >
                    <table class="table table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Contacto</th>
                                <th>Empresa</th>
                                <th>Cargo</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Direccion</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($clientes as $cliente)
                                {
                                    echo '<tr>';
                                    echo '<td><span class="status-badge">'.$cliente['idcliente'].'</span></td>';
                                    echo '<td class="fw-bold">'.$cliente['nombre'].'</td>';
                                    echo '<td>'.$cliente['empresa'].'</td>';
                                    echo '<td>'.$cliente['cargo'].'</td>';
                                    echo '<td><i class="bi bi-telephone me-2"></i>'.$cliente['telefono'].'</td>';
                                    echo '<td>'.$cliente['email'].'</td>';
                                    echo '<td>'.$cliente['direccion'].'</td>';
                                    echo '        
                                    <td class="text-center">
                                         <button 
                                            class="btn btn-sm btn-light border" 
                                            title="Ver detalle"
                                            data-bs-toggle="modal" data-bs-target="#modalDetalleContacto"
                                            onclick="contenidoDetalleContacto('.$cliente['idcliente'].')"
                                         >
                                         <i class="bi bi-eye"></i>
                                         </button>
                                         </td>
                                         </tr>';
                                         
                                         
                                         }
                                         // <button onclick="verDetalle(4)" class="btn-ver" title="Ver Expediente">
                                         //  <i class="bi bi-eye"></i>
                                         //  </button>
                                        //  <button class="btn btn-sm btn-light border text-danger" title="Eliminar"><i class="bi bi-trash"></i></button>
                                         ?>

                        </tbody>
                    </table>
                </div>
        <?php
    }

    public function ventanaModelCodigoSeguimiento()
    {
        ?>
        <div class="modal fade" id="modalDetalleContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content border-0 shadow">
            
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="exampleModalLabel">
                <i class="bi bi-person-vcard me-2"></i>Detalle del Contacto
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body" id="modalBodyDetalleContacto">
                
            </div>

            <div class="modal-footer border-0 bg-light">
                <button type="button" class="btn btn-secondary btn-sm px-4" data-bs-dismiss="modal">Cerrar</button>
                </div>
                </div>
                </div>
                </div>
                <?php
                // <button type="button" class="btn btn-dark btn-sm px-4">Editar Contacto</button>
    }

    public function contenidoDetalleContacto($idCliente)
    {
        $infoCliente=      $this->clienteModel->traerClienteId($idCliente); 
        $cuantosSeguimientos = $this->seguimientoModel->traerCuantosSeguimientosIdCliente($idCliente);
        ?>
        <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label class="text-muted small d-block">Nombre completo</label>
                    <p class="fw-bold mb-0"><?php  echo $infoCliente['nombre']?></p>
                </div>
                <div class="col-md-6">
                    <label class="text-muted small d-block">Empresa</label>
                    <p class="fw-bold mb-0"><?php  echo $infoCliente['empresa']?></p>
                </div>
                <div class="col-md-6">
                    <label class="text-muted small d-block">Cargo</label>
                    <p class="mb-0 text-secondary"><?php  echo $infoCliente['cargo']?></p>
                </div>
                <div class="col-md-6">
                    <label class="text-muted small d-block">Teléfono</label>
                    <p class="mb-0 text-primary"><?php  echo $infoCliente['cargo']?></p>
                </div>
                <div class="col-md-6">
                    <label class="text-muted small d-block">Email</label>
                    <p class="mb-0"><?php  echo $infoCliente['email']?></p>
                </div>
                <div class="col-md-6">
                    <label class="text-muted small d-block">Dirección</label>
                    <p class="mb-0"><?php  echo $infoCliente['direccion']?></p>
                </div>
                <div class="col-12">
                    <label class="text-muted small d-block">Observaciones</label>
                    <div class="bg-light p-2 rounded small text-secondary">
                        <?php  echo $infoCliente['observaciones']?>
                    </div>
                </div>
                </div>

                <hr class="text-muted opacity-25">

                  <div class="bg-light p-3 rounded">
                    <h6 class="small fw-bold mb-2">Agregar nuevo seguimiento</h6>
                    <form id="formNuevoSeguimiento">
                        <div class="input-group input-group-sm mb-2">
                            <select id="tipoGestion" class="form-select border-0 shadow-sm" style="max-width: 150px;">
                                <option value="llamada">Llamada</option>
                                <option value="visita">Visita</option>
                                <option value="email">Email</option>
                            </select>
                            <input id="dequesehablo" type="text" class="form-control border-0 shadow-sm" placeholder="¿Qué se habló con el cliente?">
                            <button class="btn btn-primary" type="button" onclick = "guardarSeguimientoCliente(<?php  echo $idCliente;  ?>);">Guardar</button>
                        </div>
                    </form>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="mb-0 text-dark fw-bold">Seguimientos Recientes</h6>
                    <span class="badge bg-info text-dark rounded-pill px-3"><?php echo $cuantosSeguimientos;  ?> Registros</span>
                </div>
                <?php
                    $seguimientos= $this->seguimientoModel->traerSeguimientosIdCliente($idCliente);
                    foreach($seguimientos as $seguimiento)
                        {
                        echo' <div class="list-group list-group-flush mb-4" style="max-height: 200px; overflow-y: auto;">
                                <div class="list-group-item px-0 border-0 border-bottom">
                                    <div class="d-flex justify-content-between">
                                    <small class="text-primary fw-bold">'.$seguimiento['tipoGestion'].'</small>
                                    <small class="text-muted">'.$seguimiento['fecha'].'</small>
                                    </div>
                                    <p class="small mb-1">'.$seguimiento['observacion'].'</p>
                                </div>
                            </div>';

                        }
                ?>

              
        <?php
    }


    public function modalFiltrar()
    {
        ?>
        <div class="modal fade" id="modalFiltrar" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm"> <div class="modal-content border-0 shadow-lg">
            
            <div class="modal-header bg-light border-0">
                <h6 class="modal-title fw-bold" id="filterModalLabel">
                <i class="bi bi-filter-left me-2"></i>Filtros Avanzados
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="indexDashboard.php" method="GET">
                
                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted">Fecha de Registro</label>
                    <input type="date" name="fecha" class="form-control form-control-sm border-0 bg-light">
                </div>

                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted">Cargo</label>
                    <select name="cargo" class="form-select form-select-sm border-0 bg-light">
                    <option value="">Todos los cargos</option>
                    <option value="gerente">Gerente</option>
                    <option value="sistemas">Sistemas</option>
                    <option value="compras">Compras</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted">Origen del Contacto</label>
                    <div class="form-check small">
                    <input class="form-check-input" type="checkbox" value="web" id="fWeb">
                    <label class="form-check-label" for="fWeb">Sitio Web</label>
                    </div>
                    <div class="form-check small">
                    <input class="form-check-input" type="checkbox" value="feria" id="fFeria">
                    <label class="form-check-label" for="fFeria">Feria Comercial</label>
                    </div>
                </div>

                <hr class="opacity-25">

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-sm">Aplicar Filtros</button>
                    <button type="reset" class="btn btn-outline-secondary btn-sm border-0">Limpiar</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        <?php
    }
}

?>