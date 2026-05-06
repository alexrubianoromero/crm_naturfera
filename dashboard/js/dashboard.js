function tablaResultadosOrdenes(){

    // var idCliente = document.getElementById('idCliente').value; 
    // var idTractor = document.getElementById('idTractor').value; 
    // var observaciones = document.getElementById('observaciones').value; 

    const http=new XMLHttpRequest();
    const url = '../dashboard/dashboard.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
              console.log(this.responseText);
           document.getElementById("div_resultados_dashboard").innerHTML  = this.responseText;
        //    document.getElementById("modalBodyTractores").innerHTML  = 'llego al js';
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("opcion=tablaResultadosOrdenes"
        // +'&idCliente='+idCliente
        //         +'&idTractor='+idTractor
        //         +'&observaciones='+observaciones
    );
    $('.modal-backdrop').hide(); 
    $('body').removeClass('modal-open');
    $('body').css('padding-right', '');
}

function tablaResultadosOrdenesFiltroNombre(){

    var nombre = document.getElementById('nombreABuscar').value; 
    // var idTractor = document.getElementById('idTractor').value; 
    // var observaciones = document.getElementById('observaciones').value; 

    const http=new XMLHttpRequest();
    const url = '../dashboard/dashboard.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
              console.log(this.responseText);
           document.getElementById("div_resultados_dashboard").innerHTML  = this.responseText;
        //    document.getElementById("modalBodyTractores").innerHTML  = 'llego al js';
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("opcion=tablaResultadosOrdenesFiltroNombre"
        +'&nombre='+nombre
        //         +'&idTractor='+idTractor
        //         +'&observaciones='+observaciones
    );
}
function tablaResultadosOrdenesFiltroEmpresa(){

    var empresa = document.getElementById('empresaABuscar').value; 
    // var idTractor = document.getElementById('idTractor').value; 
    // var observaciones = document.getElementById('observaciones').value; 

    const http=new XMLHttpRequest();
    const url = '../dashboard/dashboard.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
              console.log(this.responseText);
           document.getElementById("div_resultados_dashboard").innerHTML  = this.responseText;
        //    document.getElementById("modalBodyTractores").innerHTML  = 'llego al js';
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("opcion=tablaResultadosOrdenesFiltroEmpresa"
        +'&empresa='+empresa
        //         +'&idTractor='+idTractor
        //         +'&observaciones='+observaciones
    );
}

function contenidoDetalleContacto(idCliente){

    // var empresa = document.getElementById('empresaABuscar').value; 
    // var idTractor = document.getElementById('idTractor').value; 
    // var observaciones = document.getElementById('observaciones').value; 

    const http=new XMLHttpRequest();
    const url = '../dashboard/dashboard.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
              console.log(this.responseText);
           document.getElementById("modalBodyDetalleContacto").innerHTML  = this.responseText;
        //    document.getElementById("modalBodyTractores").innerHTML  = 'llego al js';
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("opcion=contenidoDetalleContacto"
        +'&idCliente='+idCliente
        //         +'&idTractor='+idTractor
        //         +'&observaciones='+observaciones
    );
}
function formularioNuevoContacto(){

    // var empresa = document.getElementById('empresaABuscar').value; 
    // var idTractor = document.getElementById('idTractor').value; 
    // var observaciones = document.getElementById('observaciones').value; 

    const http=new XMLHttpRequest();
    const url = '../dashboard/dashboard.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
              console.log(this.responseText);
           document.getElementById("modalBodyContactos").innerHTML  = this.responseText;
        //    document.getElementById("modalBodyTractores").innerHTML  = 'llego al js';
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("opcion=formularioNuevoContacto"
        // +'&idCliente='+idCliente
        //         +'&idTractor='+idTractor
        //         +'&observaciones='+observaciones
    );
}


function mostrar()
{
    alert('mostrar aviso');
}

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


