<?php

class EntrantesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fecharecibido_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.responsable_entrante,
                    entrantes.observaciones_entrante,
                    entrantes.estado_entrante,

                    empleados.id_empleado, 
                    empleados.documento_empleado, 
                    empleados.tipodocumento_empleado, 
                    empleados.nombres_empleado, 
                    empleados.apellidos_empleado, 
                    empleados.telefono_empleado, 
                    empleados.celular_empleado, 
                    empleados.correo_empleado, 
                    empleados.direccion_empleado, 
                    empleados.cuidad_empleado,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombres_tercero, 
                    terceros.apellidos_tercero, 
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.cuidad_tercero,

                    tiposradicado.id_tiporadicado,
                    tiposradicado.id_tiporadicado,

                    estados.id_estado,
                    estados.nombre_estado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estados ON entrantes.estado_entrante = estados.id_estados";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_entrante) {
       
        $query = "select 
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
                    entrantes.enviadopor_entrante,
                    entrantes.destinatario_entrante,
                    entrantes.fecharadicado_entrante,
                    entrantes.fecharecibido_entrante,
                    entrantes.fechamaxima_entrante,
                    entrantes.prioridad_entrante,
                    entrantes.numerofolios_entrante,
                    entrantes.descripcionfolios_entrante,
                    entrantes.asunto_entrante,
                    entrantes.tiporadicado_entrante,
                    entrantes.responsable_entrante,
                    entrantes.observaciones_entrante,
                    entrantes.estado_entrante,

                    empleados.id_empleado, 
                    empleados.documento_empleado, 
                    empleados.tipodocumento_empleado, 
                    empleados.nombres_empleado, 
                    empleados.apellidos_empleado, 
                    empleados.telefono_empleado, 
                    empleados.celular_empleado, 
                    empleados.correo_empleado, 
                    empleados.direccion_empleado, 
                    empleados.cuidad_empleado,

                    terceros.id_tercero, 
                    terceros.documento_tercero, 
                    terceros.tipodocumento_tercero, 
                    terceros.nombres_tercero, 
                    terceros.apellidos_tercero, 
                    terceros.telefono_tercero, 
                    terceros.celular_tercero, 
                    terceros.correo_tercero, 
                    terceros.direccion_tercero, 
                    terceros.cuidad_tercero,

                    tiposradicado.id_tiporadicado,
                    tiposradicado.id_tiporadicado,

                    estados.id_estado,
                    estados.nombre_estado
                
                    from entrantes 
                            left join terceros ON entrantes.remitente_entrante = terceros.id_tercero
                            left join empleados ON entrantes.destinatario_entrante = empleados.id_empleado
                            left join tiposradicado ON entrantes.tiporadicado_entrante = tiposradicado.id_tiporadicado
                            left join empleados as empleados2 ON entrantes.responsable_entrante = empleados2.id_empleado
                            left join estados ON entrantes.estado_entrante = estados.id_estados

                    where entrantes.id_entrante='".$id_entrante."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(      
                        $numero_entrante,
                        $remitente_entrante,
                        $enviadopor_entrante,
                        $destinatario_entrante,
                        $fecharadicado_entrante,
                        $fecharecibido_entrante,
                        $fechamaxima_entrante,
                        $prioridad_entrante,
                        $numerofolios_entrante,
                        $descripcionfolios_entrante,
                        $asunto_entrante,
                        $tiporadicado_entrante,
                        $responsable_entrante,
                        $observaciones_entrante,
                        $estado_entrante
                    ){
                
        $query = "INSERT INTO entrantes (
                                numero_entrante,
                                remitente_entrante,
                                enviadopor_entrante,
                                destinatario_entrante,
                                fecharadicado_entrante,
                                fecharecibido_entrante,
                                fechamaxima_entrante,
                                prioridad_entrante,
                                numerofolios_entrante,
                                descripcionfolios_entrante,
                                asunto_entrante,
                                tiporadicado_entrante,
                                responsable_entrante,
                                observaciones_entrante,
                                estado_entrante
                            )
                            VALUES(
                                '".$numero_entrante."',
                                '".$remitente_entrante."',
                                '".$enviadopor_entrante."',
                                '".$destinatario_entrante."',
                                '".$fecharadicado_entrante."',
                                '".$fecharecibido_entrante."',
                                '".$fechamaxima_entrante."',
                                '".$prioridad_entrante."',
                                '".$numerofolios_entrante."',
                                '".$descripcionfolios_entrante."',
                                '".$asunto_entrante."',
                                '".$tiporadicado_entrante."',
                                '".$responsable_entrante."',
                                '".$observaciones_entrante."',
                                '".$estado_entrante."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_entrante, 
                    $numero_entrante,
                    $remitente_entrante,
                    $enviadopor_entrante,
                    $destinatario_entrante,
                    $fecharadicado_entrante,
                    $fecharecibido_entrante,
                    $fechamaxima_entrante,
                    $prioridad_entrante,
                    $numerofolios_entrante,
                    $descripcionfolios_entrante,
                    $asunto_entrante,
                    $tiporadicado_entrante,
                    $responsable_entrante,
                    $observaciones_entrante,
                    $estado_entrante
                ) {
        
        $query = "  UPDATE entrantes 

                    SET numero_entrante = '". $numero_entrante ."',
                        remitente_entrante = '". $remitente_entrante ."',
                        enviadopor_entrante = '". $enviadopor_entrante ."',
                        destinatario_entrante = '". $destinatario_entrante ."',
                        fecharadicado_entrante = '". $fecharadicado_entrante ."',
                        fecharecibido_entrante = '". $fecharecibido_entrante ."',
                        fechamaxima_entrante = '". $fechamaxima_entrante ."',
                        prioridad_entrante = '". $prioridad_entrante ."',
                        numerofolios_entrante = '". $numerofolios_entrante ."',
                        descripcionfolios_entrante = '". $descripcionfolios_entrante ."',
                        asunto_entrante = '". $asunto_entrante ."',
                        tiporadicado_entrante = '". $tiporadicado_entrante ."',
                        responsable_entrante = '". $responsable_entrante ."',
                        observaciones_entrante = '". $observaciones_entrante ."',
                        estado_entrante = '". $estado_entrante ."'

                    WHERE id_entrante = '" . $id_entrante . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_entrante) {
        
        $query = "DELETE FROM entrantes WHERE id_entrante = '". $id_entrante ."'";        
        $this->modificarRegistros($query);

    }



    /// CONSULTAS EXTRAS

    function getNumeroEntrantes() {
        
        $query = "select count(entrantes.id_entrante) as numero
                
                    from entrantes 
                    
                    where ano_entrante = '".$_SESSION['ano']."'";
        
        $consulta = $this->consulta($query);
        return $consulta[0]['numero'];       
               
    }  

    function getNumeroEntrantesActivos() {
        
        $query = "select count(entrantes.id_entrante) as numero
                
                    from entrantes 
                    
                    where ano_entrante = '".$_SESSION['ano']."' and estado_radicado = '1'";
        
        $consulta = $this->consulta($query);
        return $consulta[0]['numero'];       
               
    }  

    function getNumeroEntrantesFinalizados() {
        
        $query = "select count(entrantes.id_entrante) as numero
                
                    from entrantes 
                    
                    where ano_entrante = '".$_SESSION['ano']."' and estado_entante = '2'";
        
        $consulta = $this->consulta($query);
        return $consulta[0]['numero'];       
               
    }  

    function getNumeroEntrantesArchivados() {
        
        $query = "select count(entrantes.id_entrante) as numero
                
                    from entrantes 
                    
                    where ano_entrante = '".$_SESSION['ano']."' and estado_radicado = '3'";
        
        $consulta = $this->consulta($query);
        return $consulta[0]['numero'];       
               
    }  

    
    function getRadicadosPorUsuario() {
        
        $query = "select count(entrantes.id_entrante) as numero
                
                    from entrantes 
                    
                    where ano_entrante = '".$_SESSION['ano']."'";
        
        $consulta = $this->consulta($query);
        return $consulta[0]['numero'];       
               
    }  
    

}

?>