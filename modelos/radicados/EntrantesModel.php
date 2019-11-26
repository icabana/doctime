<?php

class EntrantesModel extends ModelBase {
  
    function getTodos() {
        
        $query = "select 
        entrantes.id_entrante, 
        entrantes.numero_entrante,
        entrantes.remitente_entrante,
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
        entrantes.estado_entrante
                
                    from entrantes";
        
        $consulta = $this->consulta($query);
        return $consulta;       
               
    }  

    function getDatos($id_entrante) {
       
        $query = "select 	
                    entrantes.id_entrante, 
                    entrantes.numero_entrante,
                    entrantes.remitente_entrante,
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
                    entrantes.estado_entrante
                            
                    from entrantes

                    where entrantes.id_entrante='".$id_entrante."'";
        
         $consulta = $this->consulta($query);
        return $consulta[0];    
        
    }
    
    function insertar(      
                        $numero_entrante,
                        $remitente_entrante,
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
                                id_entrante, 
                                numero_entrante,
                                remitente_entrante,
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
                                '".$nombre_entrante."'
                            );";
       
        return $this->crear_ultimo_id($query);       
        
    }
    
    function editar(
                    $id_entrante, 
                    $numero_entrante,
                    $remitente_entrante,
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
    
}

?>