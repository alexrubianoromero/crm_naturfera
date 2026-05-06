function menuAlertas(){

    // var nombre = document.getElementById('nombre').value; 
    // var empresa = document.getElementById('empresa').value; 
    // var cargo = document.getElementById('cargo').value; 
    // var telefono = document.getElementById('telefono').value; 
    // var email = document.getElementById('email').value; 
    // var direccion = document.getElementById('direccion').value; 
    // var observaciones = document.getElementById('observaciones').value; 

    const http=new XMLHttpRequest();
    const url = '../alertas/alertas.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
              console.log(this.responseText);
           document.getElementById("modalBodyContactos").innerHTML  = this.responseText;
        //    document.getElementById("modalBodyTractores").innerHTML  = 'llego al js';
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send("opcion=menuAlertas"
                // +'&nombre='+nombre
                // +'&empresa='+empresa
                // +'&cargo='+cargo
                // +'&telefono='+telefono
                // +'&email='+email
                // +'&direccion='+direccion
                // +'&observaciones='+observaciones
    );
}
// function guardarSeguimientoCliente(idCliente){

//     var tipoGestion = document.getElementById('tipoGestion').value; 
//     var dequesehablo = document.getElementById('dequesehablo').value; 
//     const http=new XMLHttpRequest();
//     const url = '../clientes/clientes.php';
//     http.onreadystatechange = function(){
//         if(this.readyState == 4 && this.status ==200){
//               console.log(this.responseText);
//            document.getElementById("modalBodyContactos").innerHTML  = this.responseText;
//         //    document.getElementById("modalBodyTractores").innerHTML  = 'llego al js';
//         }
//     };
//     http.open("POST",url);
//     http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     http.send("opcion=guardarSeguimientoCliente"
//                 +'&idCliente='+idCliente
//                 +'&tipoGestion='+tipoGestion
//                 +'&dequesehablo='+dequesehablo
    
//     );
//     contenidoDetalleContacto(idCliente);
// }


