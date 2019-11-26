<?php

class SalientesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
        salientes.id_saliente, 
        salientes.numero_saliente,
        salientes.remitente_saliente,
        salientes.destinatario_saliente,
        salientes.fecharadicado_saliente,
        salientes.fecharecibido_saliente,
        salientes.fechamaxima_saliente,
        salientes.prioridad_saliente,
        salientes.numerofolios_saliente,
        salientes.descripcionfolios_saliente,
        salientes.asunto_saliente,
        salientes.tiporadicado_saliente,
        salientes.responsable_saliente,
        salientes.observaciones_saliente,
        salientes.estado_saliente
                
                    from salientes";
        
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
                    salientes.fecharecibido_saliente,
                    salientes.fechamaxima_saliente,
                    salientes.prioridad_saliente,
                    salientes.numerofolios_saliente,
                    salientes.descripcionfolios_saliente,
                    salientes.asunto_saliente,
                    salientes.tiporadicado_saliente,
                    salientes.responsable_saliente,
                    salientes.observaciones_saliente,
                    salientes.estado_saliente
                            
                    from salientes

                    where salientes.id_saliente='".$id_saliente."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(      
                        $numero_saliente,
                        $remitente_saliente,
                        $destinatario_saliente,
                        $fecharadicado_saliente,
                        $fecharecibido_saliente,
                        $fechamaxima_saliente,
                        $prioridad_saliente,
                        $numerofolios_saliente,
                        $descripcionfolios_saliente,
                        $asunto_saliente,
                        $tiporadicado_saliente,
                        $responsable_saliente,
                        $observaciones_saliente,
                        $estado_saliente
                    ){
                
        $query = "INSERT INTO salientes (
                                id_saliente, 
                                numero_saliente,
                                remitente_saliente,
                                destinatario_saliente,
                                fecharadicado_saliente,
                                fecharecibido_saliente,
                                fechamaxima_saliente,
                                prioridad_saliente,
                                numerofolios_saliente,
                                descripcionfolios_saliente,
                                asunto_saliente,
                                tiporadicado_saliente,
                                responsable_saliente,
                                observaciones_saliente,
                                estado_saliente
                            )
                            VALUES(
                                '".$nombre_saliente."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_saliente, 
                    $numero_saliente,
                    $remitente_saliente,
                    $destinatario_saliente,
                    $fecharadicado_saliente,
                    $fecharecibido_saliente,
                    $fechamaxima_saliente,
                    $prioridad_saliente,
                    $numerofolios_saliente,
                    $descripcionfolios_saliente,
                    $asunto_saliente,
                    $tiporadicado_saliente,
                    $responsable_saliente,
                    $observaciones_saliente,
                    $estado_saliente
                ) {
        
        $query = "  UPDATE salientes 

                    SET numero_saliente = '". $numero_saliente ."',
                    remitente_saliente = '". $remitente_saliente ."',
                    destinatario_saliente = '". $destinatario_saliente ."',
                    fecharadicado_saliente = '". $fecharadicado_saliente ."',
                    fecharecibido_saliente = '". $fecharecibido_saliente ."',
                    fechamaxima_saliente = '". $fechamaxima_saliente ."',
                    prioridad_saliente = '". $prioridad_saliente ."',
                    numerofolios_saliente = '". $numerofolios_saliente ."',
                    descripcionfolios_saliente = '". $descripcionfolios_saliente ."',
                    asunto_saliente = '". $asunto_saliente ."',
                    tiporadicado_saliente = '". $tiporadicado_saliente ."',
                    responsable_saliente = '". $responsable_saliente ."',
                    observaciones_saliente = '". $observaciones_saliente ."',
                    estado_saliente = '". $estado_saliente ."'

                    WHERE id_saliente = '" . $id_saliente . "'";
       
        return $this->modificarRegistros($query);
       
    }
    
    function eliminar($id_saliente) {
        
        $query = "DELETE FROM salientes WHERE id_saliente = '". $id_saliente ."'";        
        $this->modificarRegistros($query);

    }
    
}

?>