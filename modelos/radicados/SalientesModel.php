<?php

class SalientesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    salientes.id_saliente, 
                    salientes.numero_saliente,
                    salientes.remitente_saliente,
                    salientes.destinatario_saliente,
                    salientes.fecharadicado_saliente,
                    salientes.numerofolios_saliente,
                    salientes.descripcionfolios_saliente,
                    salientes.asunto_saliente,
                    salientes.tiporadicado_saliente,

                    empleados.id_empleado, 
                    empleados.documento_empleado, 
                    empleados.tipodocumento_empleado, 
                    empleados.nombres_empleado, 
                    empleados.apellidos_empleado, 
                    empleados.telefono_empleado, 
                    empleados.celular_empleado, 
                    empleados.correo_empleado, 
                    empleados.direccion_empleado, 
                    empleados.ciudad_empleado,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero
                
                    from salientes 
                            left join terceros ON salientes.destinatario_saliente = terceros.id_tercero
                            left join empleados ON salientes.remitente_saliente = empleados.id_empleado";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    

    function getSalientesPorEstadoyFecha($fecha1, $fecha2) {
        
        $consulta_fecha = "";
        
       if($fecha1 != "" && $fecha2 != ""){           
           $consulta_fecha = "and salientes.fecharadicado_saliente BETWEEN '".$fecha1."' AND  '".$fecha2."'" ;
        }else{           
           $consulta_fecha = " " ;           
       }
             
               
     $query = " salientes.id_saliente, 
                salientes.numero_saliente,
                salientes.remitente_saliente,
                salientes.destinatario_saliente,
                salientes.fecharadicado_saliente,
                salientes.numerofolios_saliente,
                salientes.descripcionfolios_saliente,
                salientes.asunto_saliente,
                salientes.tiporadicado_saliente,

                empleados.id_empleado, 
                empleados.documento_empleado, 
                empleados.tipodocumento_empleado, 
                empleados.nombres_empleado, 
                empleados.apellidos_empleado, 
                empleados.telefono_empleado, 
                empleados.celular_empleado, 
                empleados.correo_empleado, 
                empleados.direccion_empleado, 
                empleados.ciudad_empleado,

                terceros.id_tercero, 
                terceros.documento_tercero, 
                terceros.tipodocumento_tercero, 
                terceros.nombre_tercero,  
                terceros.telefono_tercero, 
                terceros.celular_tercero, 
                terceros.correo_tercero, 
                terceros.direccion_tercero, 
                terceros.ciudad_tercero
            
                from salientes 
                    left join terceros ON salientes.destinatario_saliente = terceros.id_tercero
                    left join empleados ON salientes.remitente_saliente = empleados.id_empleado

                where salientes.id_saliente != '' ".$consulta_fecha;
        
                $consulta = $this->consulta($query);
               return $consulta;       
               
    }



    function getTodosTodos() {
        
        $query = "select 
                    salientes.id_saliente, 
                    salientes.numero_saliente,
                    salientes.remitente_saliente,
                    salientes.destinatario_saliente,
                    salientes.fecharadicado_saliente,
                    salientes.numerofolios_saliente,
                    salientes.descripcionfolios_saliente,
                    salientes.asunto_saliente,
                    salientes.tiporadicado_saliente,

                    empleados.id_empleado, 
                    empleados.documento_empleado, 
                    empleados.tipodocumento_empleado, 
                    empleados.nombres_empleado, 
                    empleados.apellidos_empleado, 
                    empleados.telefono_empleado, 
                    empleados.celular_empleado, 
                    empleados.correo_empleado, 
                    empleados.direccion_empleado, 
                    empleados.ciudad_empleado,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,  
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero
                
                    from salientes 
                            left join terceros ON salientes.destinatario_saliente = terceros.id_tercero
                            left join empleados ON salientes.remitente_saliente = empleados.id_empleado";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  




    function getTrazabilidad($radicado_trazabilidad) {
        
        $query = "select 
                    trazabilidad_salientes.id_trazabilidad, 
                    trazabilidad_salientes.radicado_trazabilidad,
                    trazabilidad_salientes.accion_trazabilidad,
                    trazabilidad_salientes.usuario_trazabilidad,
                    trazabilidad_salientes.fecha_trazabilidad,

                    empleados.id_empleado, 
                    empleados.documento_empleado, 
                    empleados.tipodocumento_empleado, 
                    empleados.nombres_empleado, 
                    empleados.apellidos_empleado, 
                    empleados.telefono_empleado, 
                    empleados.celular_empleado, 
                    empleados.correo_empleado, 
                    empleados.direccion_empleado, 
                    empleados.ciudad_empleado
                
                    from trazabilidad_salientes
                            left join empleados ON trazabilidad_salientes.usuario_trazabilidad = empleados.id_empleado
                            
                    where trazabilidad_salientes.radicado_trazabilidad = '".$radicado_trazabilidad."'
                    
                    order by trazabilidad_salientes.fecha_trazabilidad desc";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  




    function getDatos($id_saliente) {
       
        $query = "select 
                    salientes.id_saliente, 
                    salientes.numero_saliente,
                    salientes.remitente_saliente,
                    salientes.destinatario_saliente,
                    salientes.fecharadicado_saliente,
                    salientes.numerofolios_saliente,
                    salientes.descripcionfolios_saliente,
                    salientes.asunto_saliente,
                    salientes.tiporadicado_saliente,

                    empleados.id_empleado, 
                    empleados.documento_empleado, 
                    empleados.tipodocumento_empleado, 
                    empleados.nombres_empleado, 
                    empleados.apellidos_empleado, 
                    empleados.telefono_empleado, 
                    empleados.celular_empleado, 
                    empleados.correo_empleado, 
                    empleados.direccion_empleado, 
                    empleados.ciudad_empleado,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombre_tercero,
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.ciudad_tercero,

                    tiposradicado.id_tiporadicado,
                    tiposradicado.id_tiporadicado
                
                    from salientes 
                            left join terceros ON salientes.destinatario_saliente = terceros.id_tercero
                            left join empleados ON salientes.remitente_saliente = empleados.id_empleado
                            left join tiposradicado ON salientes.tiporadicado_saliente = tiposradicado.id_tiporadicado

                    where salientes.id_saliente='".$id_saliente."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(      
                        $consecutivo_saliente,
                        $numero_saliente,
                        $remitente_saliente,
                        $enviadopor_saliente,
                        $destinatario_saliente,
                        $fecharadicado_saliente,
                        $prioridad_saliente,
                        $numerofolios_saliente,
                        $descripcionfolios_saliente,
                        $asunto_saliente,
                        $tiporadicado_saliente
                    ){
                
        $query = "INSERT INTO salientes (
                                consecutivo_saliente,
                                numero_saliente,
                                remitente_saliente,
                                destinatario_saliente,
                                fecharadicado_saliente,
                                numerofolios_saliente,
                                descripcionfolios_saliente,
                                asunto_saliente,
                                tiporadicado_saliente
                            )
                            VALUES(
                                '".$consecutivo_saliente."',
                                '".$numero_saliente."',
                                '".$remitente_saliente."',
                                '".$destinatario_saliente."',
                                '".$fecharadicado_saliente."',
                                '".$numerofolios_saliente."',
                                '".$descripcionfolios_saliente."',
                                '".$asunto_saliente."',
                                '".$tiporadicado_saliente."'
                            );";
       
        
       return $this->crear_ultimo_id($query);
        
    }
    
    function editar(
                    $id_saliente, 
                    $remitente_saliente,
                    $destinatario_saliente,
                    $fecharadicado_saliente,
                    $numerofolios_saliente,
                    $descripcionfolios_saliente,
                    $asunto_saliente,
                    $tiporadicado_saliente
                ) {
        
        $query = "  UPDATE salientes 

                    SET remitente_saliente = '". $remitente_saliente ."',
                        destinatario_saliente = '". $destinatario_saliente ."',
                        fecharadicado_saliente = '". $fecharadicado_saliente ."',
                        numerofolios_saliente = '". $numerofolios_saliente ."',
                        descripcionfolios_saliente = '". $descripcionfolios_saliente ."',
                        asunto_saliente = '". $asunto_saliente ."',
                        tiporadicado_saliente = '". $tiporadicado_saliente ."'

                    WHERE id_saliente = '" . $id_saliente . "'";
       
        return $this->modificarRegistros($query);
       
    }


    function mover(
                $id_saliente, 
                $carpeta_saliente
    ) {

        $query = "  UPDATE salientes 

                SET carpeta_saliente = '". $carpeta_saliente ."'

                WHERE id_saliente = '" . $id_saliente . "'";

        return $this->modificarRegistros($query);

    }



    function nuevoDocumento(
        $saliente_documento, 
        $nombre_documento
    ) {

        $query = "  INSERT INTO documentos_salientes(saliente_documento, nombre_documento)

                VALUES('". $saliente_documento ."', '". $nombre_documento ."')";

        return $this->modificarRegistros($query);

    }


    function mover_default(
                $radicados, 
                $carpeta_saliente
    ) {

        $query = "UPDATE salientes 

                SET carpeta_saliente = '". $carpeta_saliente ."'

                WHERE id_saliente in (" . $radicados . ")";

        return $this->modificarRegistros($query);

    }

    
    function cambiar(
                $id_saliente, 
                $responsable_saliente
    ) {

        $query = "  UPDATE salientes 

                SET responsable_saliente = '". $responsable_saliente ."'

                WHERE id_saliente = '" . $id_saliente . "'";

        return $this->modificarRegistros($query);

    }
    

    
    function cambiar_default(
                $radicados, 
                $responsable_saliente
    ) {

        $query = "UPDATE salientes 

                    SET responsable_saliente = '". $responsable_saliente ."'

                    WHERE id_saliente in (" . $radicados . ")";

        return $this->modificarRegistros($query);

    }
    
        
    
    function cambiarestado_default(
        $radicados, 
        $estado_saliente
) {

$query = "UPDATE salientes 

            SET estado_saliente = '". $estado_saliente ."'

            WHERE id_saliente in (" . $radicados . ")";

return $this->modificarRegistros($query);

}

    function eliminar($radicados) {
        
        $query = "DELETE FROM salientes WHERE id_saliente IN (". $radicados .")";        
        $this->modificarRegistros($query);
        
    }
    
        
    function enviarBandejaSaliente($radicados) {
        
        $query = "UPDATE salientes SET carpeta_saliente = '' WHERE id_saliente IN (". $radicados .")";        
        $this->modificarRegistros($query);
        
    }



    /// CONSULTAS EXTRAS

    function buscarRemitente() {
        
        $query = "select terceros.nombre_tercero
                
                  from terceros";
        
        $consulta = $this->consulta($query);
               
    }

    function buscarDestinatario() {
        
        $query = "select CONCAT(empleados.nombres_empleado, ' ', empleados.apellidos_empleado) 
                
                  from terceros";
        
        $consulta = $this->consulta($query);
               
    }

    function getConsecutivo() {
        
        $query = "select max(salientes.consecutivo_saliente) as consecutivo
                
                    from salientes";
        
        $consulta = $this->consulta($query);

        if(isset($consulta[0]['consecutivo'])){
            return $consulta[0]['consecutivo'];
        }
               
    }
    

    function getNumeroRadicadosPorResponsable($responsable_saliente) {
        
        $query = "select count(salientes.id_saliente) as numero
                
                    from salientes 
                    
                    where responsable_saliente = '".$responsable_saliente."'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }       
               
    }  


    function getNumeroRadicadosPorDependencia($dependencia_saliente) {
        
        $query = "select count(salientes.id_saliente) as numero
                
                    from salientes 
                    
                    where dependencia_saliente = '".$dependencia_saliente."'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }       
               
    }  


    function getNumeroRadicadosPorTiporadicado($tiporadicado_saliente) {
        
        $query = "select count(salientes.id_saliente) as numero
                
                    from salientes 
                    
                    where tiporadicado_saliente = '".$tiporadicado_saliente."'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }       
               
    }


    function getNumeroSalientes() {
        
        $query = "select count(salientes.id_saliente) as numero
                
                    from salientes";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }
               
    }  

    function getNumeroSalientesActivos() {
        
        $query = "select count(salientes.id_saliente) as numero
                
                    from salientes 
                    
                    where estado_radicado = '1'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }  
               
    }  

    function getNumeroSalientesFinalizados() {
        
        $query = "select count(salientes.id_saliente) as numero
                
                    from salientes 
                    
                    where estado_entante = '2'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }      
               
    }

    function getNumeroSalientesArchivados() {
        
        $query = "select count(salientes.id_saliente) as numero
                
                    from salientes 
                    
                    where ano_saliente = '".$_SESSION['ano']."' and estado_radicado = '3'";
        
        $consulta = $this->consulta($query);
        if(isset($consulta[0]['numero'])){
            return $consulta[0]['numero'];
        }        
               
    }

    
    function getRadicadosPorUsuario() {
        
        $query = "  empleados.nombres_empleado,
                    empleados.apellidos_empleado,
                    count(salientes.id_saliente) as cantidad
                
                    from salientes 
                        left join empleados ON salientes.responsable_saliente = empleados.id_empleado
                    
                    where ano_saliente = '".$_SESSION['ano']."'
                    
                    group by salientes.responsable_saliente";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }
    
    
    function getRadicadosPorDependencias() {
        
        $query = "  dependencias.nombre_dependencia,
                    count(salientes.id_saliente) as cantidad
                
                    from salientes 
                        left join empleados ON salientes.responsable_saliente = empleados.id_empleado
                        left join dependencias ON empleados.dependencia_empleado = dependencias.id_dependencia
                    
                    where ano_saliente = '".$_SESSION['ano']."'
                    
                    group by dependencias.id_dependencia";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }


    function insertar_trazabilidad(
            $radicado_trazabilidad,
            $accion_trazabilidad
    ){

        $query = "INSERT INTO trazabilidad_salientes (
                radicado_trazabilidad,
                accion_trazabilidad,
                fecha_trazabilidad,
                usuario_trazabilidad
            )
            VALUES(
                '".$radicado_trazabilidad."',
                '".$accion_trazabilidad."',
                '".date('Y-m-d H:i:s')."',
                '".$_SESSION['id_empleado']."'
            );";

        return $this->crear_ultimo_id($query);

    }



}

?>