<?php
$raiz = dirname(dirname(dirname(__file__)));

require_once($raiz.'/conexion/Conexion.php');

class ClienteModel extends Conexion
{


    public function traerClientes()
    {
         $sql = "select * from cliente0  order by idcliente desc" ;
        $query = $this->connectMysql()->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_ASSOC); 
        $this->desconectar();
        return $results;
    }
    public function traerClientesFiltroNombre($nombre)
    {
         $sql = "select * from cliente0 where nombre like '%".$nombre."%' " ;
        $query = $this->connectMysql()->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_ASSOC); 
        $this->desconectar();
        return $results;
    }
    public function traerClientesFiltroEmpresa($empresa)
    {
         $sql = "select * from cliente0 where empresa like '%".$empresa."%' " ;
        $query = $this->connectMysql()->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_ASSOC); 
        $this->desconectar();
        return $results;
    }

    public function traerClienteId($idCliente)
    {
         $sql = "select * from cliente0 where idcliente = '".$idCliente."'   " ;
        $query = $this->connectMysql()->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetch(PDO::FETCH_ASSOC); 
        $this->desconectar();
        return $results;
    }


    public function grabarContactoCrm($request)
    {
            $sql = "insert into cliente0  (nombre,empresa,cargo,telefono,direccion,email,observaciones)  
            values(:nombre,:empresa,:cargo,:telefono,:direccion,:email,:observaciones)";
            // die($sql);
            $query = $this->connectMysql()->prepare($sql); 
            $query->bindParam(':nombre',$request['nombre'],PDO::PARAM_STR, 25);
            $query->bindParam(':empresa',$request['empresa'],PDO::PARAM_STR, 25);
            $query->bindParam(':cargo',$request['cargo'],PDO::PARAM_STR, 25);
            $query->bindParam(':telefono',$request['telefono'],PDO::PARAM_STR, 25);
            $query->bindParam(':direccion',$request['direccion'],PDO::PARAM_STR, 25);
            $query->bindParam(':email',$request['email'],PDO::PARAM_STR, 25);
            $query->bindParam(':observaciones',$request['observaciones'],PDO::PARAM_STR, 25);
            // $query->debugDumpParams();
            // TRUCO: Reemplazo manual para visualización
            $visualSql = $sql;
            foreach ($request as $key => $value) {
                $visualSql = str_replace(':'.$key, "'$value'", $visualSql);
            }
            // die($visualSql);
            $query->execute();
            $this->desconectar();
            return 0;
    }

    public function guardarSeguimientoCliente($request)
    {
            $sql = "insert into seguimientos  (id_taller,observacion,tipoGestion)  
            values(:id_taller,:observacion,:tipoGestion)";
            // die($sql);
            $query = $this->connectMysql()->prepare($sql); 
            $query->bindParam(':id_taller',$request['idCliente'],PDO::PARAM_STR, 25);
            $query->bindParam(':observacion',$request['dequesehablo'],PDO::PARAM_STR, 25);
            $query->bindParam(':tipoGestion',$request['tipoGestion'],PDO::PARAM_STR, 25);
            $query->execute();
            $this->desconectar();
            return 0;
    }
    // function traerCLienteId($idCliente)
    // {
    //         $sql = "select * from cliente0  where idcliente = '".$idCliente."' " ;
    //         $consulta = mysql_query($sql,$this->connectMysql()); 
    //         $inspecciones = mysql_fetch_assoc($consulta);
    //         return $inspeccion; 
    // }




}


?>